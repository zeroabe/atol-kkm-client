<?php

namespace KKMClient\Traits;


use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\AccessType;
use JMS\Serializer\Annotation\Accessor;
use JMS\Serializer\Annotation\Type;

/**
 * Class CommonResponseTrait
 * @package KKMClient\Traits
 * @AccessorType("public_method")
 */
trait CommonResponseTrait
{
    /**
     * @var string
     * @SerializedName("Command")
     * @Type("string")
     */
    private $name;

    /**
     * @var string
     * @SerializedName("Error")
     * @Type("string")
     */
    private $error;

    /**
     * @var integer
     * @SerializedName("status")
     * @Type("integer")
     */
    private $status;

    /**
     * @return string
     */
    public function getName (): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName ( string $name )
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getError (): string
    {
        return $this->error;
    }

    /**
     * @param string $error
     */
    public function setError ( string $error = "" )
    {
        $this->error = $error;
    }

    /**
     * @return int
     */
    public function getStatus (): int
    {
        return $this->status;
    }

    /**
     * @param int $status
     */
    public function setStatus ( int $status )
    {
        $this->status = $status;
    }
}