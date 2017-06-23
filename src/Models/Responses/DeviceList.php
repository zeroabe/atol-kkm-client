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

    /**
     * @param Device $device
     */
    public function addDevice( Device $device )
    {
        $this->devices[] = $device;
    }

    /**
     * @param $index
     * @return mixed|null
     */
    public function getDevice( $index )
    {
        if(isset ($this->devices[$index])) {
            return $this->devices[$index];
        }
        return null;
    }

    /**
     * @param $index
     */
    public function removeDevice($index)
    {
        if(isset ($this->devices[$index])) {
            unset($this->devices[$index]);
        }
    }

    /**
     * @return Device|null
     */
    public function getFirstActive()
    {
        foreach ($this->devices as $device) {
            if($device->getStatus()) return $device;
        }
        return null;
    }

    /**
     * @param Device|null $device
     * @return Device|null
     */
    public function getNextActive(Device $device = null)
    {
        $device = $device ? $device : $this->getFirstActive();
        $index = array_search($device, $this->devices);
        $this->removeDevice($index);
        return $this->getFirstActive();
    }
}