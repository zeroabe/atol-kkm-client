<?php

namespace KKMClient\Models\Queries\Chunks;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\AccessType;

/**
 * Class BarcodeChunk
 * @package KKMClient\Queries\Chunks
 * @AccessType("public_method")
 */
class BarcodeChunk
{
    /**
     * @var string
     * @SerializedName("BarcodeType")
     * @Type("string")
     */
    protected $barcodeType;

    /**
     * @var string
     * @SerializedName("Barcode")
     * @Type("string)
     */
    protected $barcode;

    public function __construct () { }

    /**
     * @return string
     */
    public function getBarcodeType (): string
    {
        return $this->barcodeType;
    }

    /**
     * @param string $barcodeType
     */
    public function setBarcodeType ( string $barcodeType )
    {
        $this->barcodeType = $barcodeType;
    }

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


}