<?php

namespace KKMClient\Interfaces;


interface ResponseInterface
{
    public function getName () : string;
    public function getStatus() : integer;
    public function getError () : string;
}