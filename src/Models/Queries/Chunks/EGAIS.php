<?php

namespace KKMClient\Models\Queries\Chunks;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\AccessType;


/**
 * Class EGAIS
 * @package KKMClient\Queries\Chunks
 * @AccessType("public_method")
 */
class EGAIS
{
    /**
     * @var string
     * @SerializedName("Barcode")
     * @Type("string")
     */
    protected $barcode;

    /**
     * @var string
     * @SerializedName("Ean")
     * @Type("string")
     */
    protected $ean;

    /**
     * @var float
     * @SerializedName("Volume")
     * @Type("float")
     */
    protected $volume;

    public function __construct () { }

    /**
     * @return string
     */
    public function getBarcode (): string
    {
        return $this->barcode;
    }

    /**
     * @param string $barcode
     */
    public function setBarcode ( string $barcode )
    {
        $this->barcode = $barcode;
    }

    /**
     * @return string
     */
    public function getEan (): string
    {
        return $this->ean;
    }

    /**
     * @param string $ean
     */
    public function setEan ( string $ean )
    {
        $this->ean = $ean;
    }

    /**
     * @return float
     */
    public function getVolume (): float
    {
        return $this->volume;
    }

    /**
     * @param float $volume
     */
    public function setVolume ( float $volume )
    {
        $this->volume = $volume;
    }
}