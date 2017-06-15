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
     * @var integer
     * @SerializedName("NumDevice")
     * @Type("integer")
     * @AccessType("public_method")
     * @Accessor(getter="getDeviceNumber",setter="setDeviceNumber")
     */
    private $deviceNumber = 0;

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
    private $timeout = 30;

    /**
     * @return string
     */
    public function getId() :string
    {
        if ( !$this->id)
            $this->setId();
        return $this->id;
    }

    /**
     * @param string|null $id
     * @return $this
     */
    public function setId( string $id = null )
    {
        if (!$id)
            $this->id = Uuid::uuid1()->toString();
        else
            $this->id = $id;
        return $this;
    }

    public function getName() :string
    {
        return $this->name;
    }

    public function setName( string $name )
    {
        $this->name = $name;
        return $this;
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
     * @return $this
     */
    public function setTimeout ( int $timeout )
    {
        $this->timeout = $timeout;
        return $this;
    }

    /**
     * @return int
     */
    public function getDeviceNumber (): int
    {
        return $this->deviceNumber;
    }

    /**
     * @param int $deviceNumber
     * @return $this
     */
    public function setDeviceNumber ( int $deviceNumber = 0 )
    {
        $this->deviceNumber = $deviceNumber;
        return $this;
    }

    public function getResponseClassName() : string
    {
       return ''.(new \ReflectionClass($this))->getShortName();
    }
}