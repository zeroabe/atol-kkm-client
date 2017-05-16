<?php
namespace KKMClient\Interfaces;


interface CommandInterface
{
    public function getId();
    public function setId( string $id = null );
    public function getName();
    public function setName( string $name );
}