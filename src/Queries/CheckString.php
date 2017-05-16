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
     * @var \KKMClient\Queries\Chunks\BarcodeChunk
     * @SerializedName("BarCode")
     * @Type("\KKMClient\Queries\Chunks\BarcodeChunk")
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
     * @return Chunks\RegisterChunk
     */
    public function getRegister (): Chunks\RegisterChunk
    {
        return $this->register;
    }

    /**
     * @param Chunks\RegisterChunk $register
     */
    public function setRegister ( Chunks\RegisterChunk $register )
    {
        $this->register = $register;
    }

    /**
     * @return Chunks\BarcodeChunk
     */
    public function getBarcode (): Chunks\BarcodeChunk
    {
        return $this->barcode;
    }

    /**
     * @param Chunks\BarcodeChunk $barcode
     */
    public function setBarcode ( Chunks\BarcodeChunk $barcode )
    {
        $this->barcode = $barcode;
    }
}