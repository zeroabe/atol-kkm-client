<?php

namespace KKMClient\Models\Queries\Commands;


use KKMClient\Interfaces\CommandInterface;
use KKMClient\Traits\CommonCommandTrait;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\AccessType;
use JMS\Serializer\Annotation\Accessor;

/**
 * Class OpenShift
 * @package KKMClient\Models\Queries\Commands
 * @AccessType("public_method")
 */
class OpenShift implements CommandInterface
{
    use CommonCommandTrait;

    public function __construct ()
    {
        $this->name = "OpenShift";
    }
}