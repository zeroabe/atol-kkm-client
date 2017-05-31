<?php

namespace KKMClient\Models\Responses;


use KKMClient\Interfaces\ResponseInterface;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\AccessType;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\Accessor;
use KKMClient\Models\Devices\Device;
use KKMClient\Traits\CommonResponseTrait;

/**
 * Class DeviceList
 * @package KKMClient\Models\Responses
 * @AccessType("public_method")
 */
class DeviceList implements ResponseInterface
{
    use CommonResponseTrait;

    /**
     * @var array
     * @SerializedName("ListUnit")
     * @Type("array<KKMClient\Models\Devices\Device>")
     * @Accessor(getter="getDevices",setter="setDevices")
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

    public function addDevice( Device $device )
    {
        $this->devices[] = $device;
    }
}