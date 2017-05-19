<?php
namespace KKMClient\Interfaces;


interface CommandInterface
{
    public function getId() : string;
    public function setId( string $id = null );
    public function getName() : string;
    public function setName( string $name );
    public function getResponseClassName() : string;
}