<?php

namespace KKMClient\Queries;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\AccessType;
use KKMClient\Queries\Chunks\PrintTextChunk;

/**
 * Class CheckString
 * @package KKMClient\Queries
 * @AccessType("public_method")
 */
class CheckString
{
    /**
     * @var \KKMClient\Queries\Chunks\PrintTextChunk
     * @SerializedName("PrintText")
     * @Type("\KKMClient\Queries\Chunks\PrintTextChunk")
     */
    protected $printText;

    /**
     * @var \KKMClient\Queries\Chunks\RegisterChunk
     * @SerializedName("Register")
     * @Type("\KKMClient\Queries\Chunks\RegisterChunk")
     */
    protected $register;

    /**
     * @var
     */
    protected $barcode;

}