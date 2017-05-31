<?php

namespace KKMClient\Interfaces;


interface ResponseInterface
{
    public function getName () : string;
    public function getStatus() : int;
    public function getError () : string;
}