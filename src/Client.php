<?php
namespace KKMClient;

use GuzzleHttp\Client as Http;
use KKMClient\Exceptions\UnknownKKMCommand;
use JMS\Serializer\Exception\LogicException;
use KKMClient\Interfaces\CommandInterface;
use KKMClient\Factories\QueriesFactory;
use Autoload\Annotations;

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
    public function __construct (string $url, array $options, bool $async = false)
    {
        $pattern = '~(https?)?:?/?/?([\D|\d]*):(\d*)/?(Execute)?/?(a?sync)?~';
        preg_match_all($pattern, $url, $matches);
        if ($matches[0] && $matches[0][0]) {
            $url = $matches[1][0] ? $matches[1][0] : 'http';
            $url .= '://';
            $url .= $matches[2][0] ? $matches[2][0] : 'localhost';
            $url .= $matches[3][0] ? ':'.$matches[3][0] : '';
            $url .= $matches[4][0] ? '/'.$matches[4][0] : '/Execute';
            if($async) {
                $url .= '/async/';
            } elseif(!$async && !$matches[5] && !$matches[5][0]) {
                $url .= '/sync/';
            } elseif (!$async && $matches[5] && $matches[5][0]) {
                $url .= '/'.$matches[5][0].'/';
            }
        }
        $this->url = $url;
        if(!isset($options['user']) || !$options['user'])
            throw new \Exception("User name has to be provided in options array");
        if(!isset($options['pass'])) $options['pass'] = '';
        $config = [
            'base_uri' => $url,
            'auth' => [
                $options['user'], $options['pass']
            ],
            'verify' => false
        ];
        $this->http = new Http($config);
        $this->factory = new QueriesFactory();
        Annotations::registry();
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