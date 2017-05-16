<?php

namespace KKMClient;

use GuzzleHttp\Client as Http;
use KKMClient\Interfaces\CommandInterface;

/**
 * Class Client
 * @package KKMClient
 * Позволяет совершать запросы к серверу ККМ
 */
class Client
{
    private $http;

    private $url;

    private $commands = [];

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
    }

    public function addCommand(CommandInterface $command)
    {

    }
}