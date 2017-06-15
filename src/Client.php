<?php
namespace KKMClient;

use GuzzleHttp\Client as Http;
use KKMClient\Exceptions\UnknownKKMCommand;
use JMS\Serializer\Exception\LogicException;
use KKMClient\Interfaces\CommandInterface;
use KKMClient\Factories\QueriesFactory;
use Autoload\Annotations;
use KKMClient\Models\Devices\Device;

/**
 * Class Client
 * @package KKMClient
 * Позволяет совершать запросы к серверу ККМ
 */
class Client
{
    /**
     * @var Http
     */
    private $http;

    /**
     * @var string
     */
    private $url;

    private $commands;

    /**
     * @var QueriesFactory
     */
    private $factory;

    /**
     * Client constructor.
     * @param $url  string  url ККМ сервера
     * @param array $options
     * @param bool $async
     * @throws \Exception
     */
    public function __construct (string $url, array $options, bool $async = true)
    {
        $url .= '/Execute/';
        if($async) {
            $url .= 'async';
        }
        $url .= 'sync';
        $this->url = $url;
        if(!isset($options['user']) || !$options['user'])
            throw new \Exception("User name has to be provided in options array");
        if(!isset($options['pass'])) $options['pass'] = '';
        $config = [
            'base_uri' => $url,
            'auth' => [
                $options['user'], $options['pass']
            ]
        ];
        $this->http = new Http($config);
        $this->factory = new QueriesFactory();
        Annotations::registry();
    }

    /**
     * @param CommandInterface $command
     */
    protected function addCommand( CommandInterface $command)
    {
        if(!isset($this->commands[$command->getName()]))
            $this->commands[$command->getName()] = [];
        $this->commands[$command->getName()][$command->getId()] = $command;
    }

    protected function addDevice( Device $device )
    {

    }

    /**
     * @param $attributes
     */
    public function resolveCommand( $attributes )
    {
        if(!isset($attributes['Command'])) {
            throw new LogicException("Wrong request body!");
        }

        $name = $attributes['Command'];
        $command = $this->factory->$name($attributes);
        return $command;
    }

    public function executeCommand( CommandInterface $command )
    {
        if(!$command->getName())
            throw new UnknownKKMCommand($command);
        $serializedCommand = $this->factory->serializeCommand($command);

        $response = $this->http->request('post', '', ['body' => $serializedCommand]);

        if ( $response && $response->getStatusCode() == 200 ) {
            return $this->factory->deSerializeResponse($response->getBody(), $command->getResponseClassName());
        }
    }
}