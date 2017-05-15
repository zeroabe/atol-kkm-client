<?php

namespace KKMClient\Queries;

use Ramsey\Uuid;
use JMS\Serializer\Annotation\Accessor;

class Command
{
    /**
     * @Accessor(getter="getId", setter="setId")
     */
    protected $IdCommand;

    public function getId()
    {
        return $this->IdCommand;
    }

    public function setId()
    {
        $this->IdCommand = Uuid\Uuid::uuid1();
    }
}