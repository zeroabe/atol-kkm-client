<?php

namespace KKMClient\Models\Responses;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Accessor;
use JMS\Serializer\Annotation\AccessType;
use JMS\Serializer\Annotation\Type;
use KKMClient\Interfaces\ResponseInterface;
use KKMClient\Traits\CommonResponseTrait;

class OpenShift implements ResponseInterface
{
    use CommonResponseTrait;
}