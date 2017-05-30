<?php
namespace KKMClient;

use GuzzleHttp\Client as Http;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Response;
use KKMClient\Exceptions\UnknownKKMCommand;
use Psr\Http\Message\ResponseInterface;
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

    private $devices;

    private $responses;

    /**
     * @var QueriesFactory
     */
    private $factory;

    /**
     * Client constructor.
     * @param $url  string  url ККМ сервера
     * @param $user string  Логин пользователя сервера ККМ
     * @param $pass string  Пароль пользователя сервера ККМ
     */
    public function __construct (string $url, string $user, string $pass)
    {
        $this->url = $url;
        $config = [
            'base_uri' => $url,
            'auth' => [
                $user, $pass
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

    public function getDeviceList( bool $onlyActive = true )
    {
        $deviceQuery = $this->factory->List();
    }


    public function executeCommand( CommandInterface $command )
    {
        if(!$command->getName())
            throw new UnknownKKMCommand($command);
        $serializedCommand = $this->factory->serializeCommand($command);

        $response = $this->http->request('post', '', ['body' => $serializedCommand]);

        if ( $response && $response->getStatusCode() == 200 )
            return $this->factory->deSerializeResponse($response->getBody(), $command->getResponseClassName());
    }
}