<?php

namespace KKMClient\Models\Queries\Commands;


use KKMClient\Interfaces\CommandInterface;
use KKMClient\Traits\CommonCommandTrait;

class DeviceInformation implements CommandInterface
{
    use CommonCommandTrait;

    public function __construct ( int $deviceNumber = 0 )
    {
        $this->deviceNumber = $deviceNumber;
    }

    public function getName() : string
    {
        return "GetDataKKT";
    }
}