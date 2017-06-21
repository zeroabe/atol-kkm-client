<?php

namespace KKMClient\Models\Responses;

use KKMClient\Interfaces\ResponseInterface;
use KKMClient\Traits\CommonResponseTrait;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\AccessType;

class CommandInformation implements ResponseInterface
{
    use CommonResponseTrait;

    /**
     * @var
     * @SerializedName("Rezult")
     * @Type(<KKMClient\Interfaces\ResponseInterface>)
     */
    protected $result;
}