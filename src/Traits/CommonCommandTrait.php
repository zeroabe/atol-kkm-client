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

    public function setId( string $id = null )
    {
        if (!$id)
            $this->id = Uuid::uuid1()->toString();
        else
            $this->id = $id;
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