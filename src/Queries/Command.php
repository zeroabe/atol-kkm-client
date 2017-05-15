<?php

namespace KKMClient\Queries;

use Ramsey\Uuid;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\AccessType;
use KKMClient\Queries\Enums\CheckTypes;
use KKMClient\Queries\Enums\Taxes;

/**
 * Class Command
 * @package KKMClient\Queries
 * @AccessType("public_method")
 */
class Command
{
    /**
     * @var string
     * @SerializedName("IdCommand")
     */
    protected $id;

}