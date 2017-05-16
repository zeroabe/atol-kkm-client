<?php
namespace KKMClient;

use GuzzleHttp\Client as Http;
use JMS\Serializer\Exception\LogicException;
use KKMClient\Interfaces\CommandInterface;
use KKMClient\Factories\QueriesFactory;


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
     * @var array
     */
    private $commands = [];

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
    }

    /**
     * @param CommandInterface $command
     */
    protected function addCommand( CommandInterface $command)
    {
        $this->commands[] = $command;
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

    /**
     *
     */
    public function executeCommands()
    {

    }
}