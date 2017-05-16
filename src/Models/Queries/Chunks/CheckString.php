<?php

namespace KKMClient\Models\Queries\Chunks;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\AccessType;
use KKMClient\Models\Queries\Chunks\PrintTextChunk;

/**
 * Class CheckString
 * @package KKMClient\Queries
 * @AccessType("public_method")
 */
class CheckString
{
    /**
     * @var \KKMClient\Models\Queries\Chunks\PrintTextChunk
     * @SerializedName("PrintText")
     * @Type("\KKMClient\Models\Queries\Chunks\PrintTextChunk")
     */
    protected $printText;

    /**
     * @var \KKMClient\Models\Queries\Chunks\RegisterChunk
     * @SerializedName("Register")
     * @Type("\KKMClient\Models\Queries\Chunks\RegisterChunk")
     */
    protected $register;

    /**
     * @var \KKMClient\Models\Queries\Chunks\BarcodeChunk
     * @SerializedName("BarCode")
     * @Type("\KKMClient\Models\Queries\Chunks\BarcodeChunk")
     */
    protected $barcode;

    public function __construct () { }

    /**
     * @return PrintTextChunk
     */
    public function getPrintText (): PrintTextChunk
    {
        return $this->printText;
    }

    /**
     * @param PrintTextChunk $printText
     */
    public function setPrintText ( PrintTextChunk $printText )
    {
        $this->printText = $printText;
    }

    /**
     * @return RegisterChunk
     */
    public function getRegister (): RegisterChunk
    {
        return $this->register;
    }

    /**
     * @param RegisterChunk $register
     */
    public function setRegister ( RegisterChunk $register )
    {
        $this->register = $register;
    }

    /**
     * @return BarcodeChunk
     */
    public function getBarcode (): BarcodeChunk
    {
        return $this->barcode;
    }

    /**
     * @param BarcodeChunk $barcode
     */
    public function setBarcode ( BarcodeChunk $barcode )
    {
        $this->barcode = $barcode;
    }
}