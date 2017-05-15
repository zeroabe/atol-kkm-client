<?php

namespace KKMClient;

use GuzzleHttp\Client as Http;
use KKMClient\Queries\Command;

class Client
{
    private $http;

    private $url;

    private $commands = [];

    public function __construct ($url)
    {
        $this->url = $url;
        $config = [
            'base_uri' => $url,
        ];
        $this->http = new Http($config);
    }

    public function addCommand(Command $command)
    {

    }
}