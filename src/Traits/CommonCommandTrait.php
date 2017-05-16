<?php

namespace KKMClient\Traits;

use Ramsey\Uuid\Uuid;

trait CommonCommandTrait
{
    protected $id;

    protected $name;

    public function getId() :string
    {
        return $this->id;
    }

    public function setId()
    {
        $this->id = Uuid::uuid1()->toString();
    }
    public function getName() :string
    {
        return $this->name;
    }
    public function setName( string $name )
    {
        $this->name = $name;
    }
}