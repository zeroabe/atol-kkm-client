<?php

namespace KKMClient\Queries\Chunks;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\AccessType;


/**
 * Class PrintTextChunk
 * @package KKMClient\Queries\Chunks
 * @AccessType("public_method")
 */
class PrintTextChunk
{
    /**
     * @var string
     * @SerializedName("Text")
     * @Type("string")
     */
    protected $text;

    /**
     * @var integer
     * @SerializedName("Font")
     * @Type("integer")
     */
    protected $font;

    /**
     * @var integer
     * @SerializedName("Intensity")
     * @Type("integer")
     */
    protected $intensity;
}