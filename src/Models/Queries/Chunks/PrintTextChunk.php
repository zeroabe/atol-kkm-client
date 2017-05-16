<?php

namespace KKMClient\Models\Queries\Chunks;

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

    public function __construct () { }

    /**
     * @return string
     */
    public function getText (): string
    {
        return $this->text;
    }

    /**
     * @param string $text
     */
    public function setText ( string $text )
    {
        $this->text = $text;
    }

    /**
     * @return int
     */
    public function getFont (): int
    {
        return $this->font;
    }

    /**
     * @param int $font
     */
    public function setFont ( int $font )
    {
        $this->font = $font;
    }

    /**
     * @return int
     */
    public function getIntensity (): int
    {
        return $this->intensity;
    }

    /**
     * @param int $intensity
     */
    public function setIntensity ( int $intensity )
    {
        $this->intensity = $intensity;
    }


}