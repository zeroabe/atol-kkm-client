<?php

namespace KKMClient\Models\Responses;


use KKMClient\Interfaces\ResponseInterface;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\AccessType;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\Accessor;

/**
 * Class ListUnit
 * @package KKMClient\Models\Responses
 * @AccessType("public_method")
 */
class ListUnit implements ResponseInterface
{
    /**
     * @var array
     * @SerializedName("ListUnit")
     * @Type(array<KKMClient\Models\Devices\Device>)
     */
    private $devices;

    /**
     * @return array
     */
    public function getDevices (): array
    {
        return $this->devices;
    }

    /**
     * @param array $devices
     */
    public function setDevices ( array $devices )
    {
        $this->devices = $devices;
    }
}