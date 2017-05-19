<?php

namespace KKMClient\Traits;

use Ramsey\Uuid\Uuid;
Use JMS\Serializer\Annotation\Accessor;
Use JMS\Serializer\Annotation\AccessType;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

/**
 * Class CommonCommandTrait
 * @package KKMClient\Traits
 * @AccessType("public_method")
 */
trait CommonCommandTrait
{
    /**
     * @var string
     * @SerializedName("IdCommand")
     * @Type("string")
     * @Accessor(getter="getId",setter="setId")
     */
    private $id;

    /**
     * @var string
     * @SerializedName("Command")
     * @Type("string")
     * @Accessor(getter="getName",setter="setName")
     */
    private $name;

    /**
     * @var integer
     * @SerializedName("Timeout")
     * @Type("integer")
     * @Accessor(getter="getTimeOut",setter="setTimeout")
     */
    private $timeout;

    /**
     * @return string
     */
    public function getId() :string
    {
        return $this->id;
    }

    /**
     * @param string|null $id
     */
    public function setId( string $id = null )
    {
        if (!$id)
            $this->id = Uuid::uuid1()->toString();
        else
            $this->id = $id;
        echo "Setting ID ". $this->id;
    }

    public function getName() :string
    {
        return $this->name;
    }

    public function setName( string $name )
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getTimeout (): int
    {
        return $this->timeout;
    }

    /**
     * @param int $timeout
     */
    public function setTimeout ( int $timeout )
    {
        $this->timeout = $timeout;
    }

    public function getResponseClassName()
    {
        return '';
    }
}