<?php

namespace KKMClient\Queries;

use KKMClient\Interfaces\CommandInterface;
use KKMClient\Traits\CommonCommandTrait;
use Ramsey\Uuid\Uuid;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\AccessType;
use JMS\Serializer\Annotation\Accessor;
use KKMClient\Queries\Enums\CheckTypes;

/**
 * Class Command
 * @package KKMClient\Queries
 * @AccessType("public_method")
 */
class Command implements CommandInterface
{
    use CommonCommandTrait;
    /**
     * @var string
     * @SerializedName("IdCommand")
     */
    protected $id;

    /**
     * @var string
     * @SerializedName("Command")
     * @Type("string")
     */
    protected $name;

    /**
     * @var integer
     * @SerializedName("NumDevice")
     * @Type("integer")
     */
    protected $deviceNumber;

    /**
     * @var string
     * @SerializedName("InnKkm")
     * @Type("string")
     */
    protected $kkmInn;


    /**
     * @var integer
     * @SerializedName("Timeout")
     * @Type("integer")
     */
    protected $timeout;

    /**
     * @var boolean
     * @SerializedName("IsFiscalCheck")
     * @Type("boolean")
     * @Accessor(getter="isFiscal",setter="setFiscal")
     */
    protected $fiscal;

    /**
     * @var integer
     * @SerializedName("TypeCheck")
     * @Type("integer")
     */
    protected $checkType;

    /**
     * @var boolean
     * @SerializedName("CancelOpenedCheck")
     * @Type("boolean")
     * @Accessor(getter="getOpenedCheckCancellation",setter="setOpenedCheckCancellation))
     */
    protected $cancelOpenedCheck;

    /**
     * @var boolean
     * @SerializedName("NotPrint")
     * @Type("boolean")
     * @Accessor(getter="isPrint",setter="setPrint")
     */
    protected $print;

    /**
     * @var string
     * @SerializedName("CashierName")
     * @Type("string")
     */
    protected $cashierName;

    /**
     * @var integer
     * @SerializedName("TaxVariant")
     * @Type("integer")
     */
    protected $tax;

    /**
     * @var array
     * @SerializedName("CheckStrings")
     * @Type("array<\KKMClient\Queries\CheckString>")
     */
    protected $strings = [];

    /**
     * @var float
     * @SerializedName("Cash")
     * @Type("float")
     */
    protected $cash;

    /**
     * @var float
     * @SerializedName("CashLessType1")
     * @Type("float")
     */
    protected $cashlessPayment1;

    /**
     * @var float
     * @SerializedName("CashLessType2")
     * @Type("float")
     */
    protected $cashlessPayment2;

    /**
     * @var float
     * @SerializedName("CashLessType3")
     * @Type("float")
     */
    protected $cashlessPayment3;

    public function __construct () { }

    /**
     * @return int
     */
    public function getDeviceNumber (): int
    {
        return $this->deviceNumber;
    }

    /**
     * @param int $deviceNumber
     */
    public function setDeviceNumber ( int $deviceNumber )
    {
        $this->deviceNumber = $deviceNumber;
    }

    /**
     * @return string
     */
    public function getKkmInn (): string
    {
        return $this->kkmInn;
    }

    /**
     * @param string $kkmInn
     */
    public function setKkmInn ( string $kkmInn )
    {
        $this->kkmInn = $kkmInn;
    }

    /**
     * @return int
     */
    public function getTimeout (): int
    {
        return $this->timeout;
    }

    /**
     * @param int $timeout
     */
    public function setTimeout ( int $timeout )
    {
        $this->timeout = $timeout;
    }

    /**
     * @return bool
     */
    public function isIsFiscal (): bool
    {
        return $this->isFiscal;
    }

    /**
     * @param bool $isFiscal
     */
    public function setIsFiscal ( bool $isFiscal )
    {
        $this->isFiscal = $isFiscal;
    }

    /**
     * @return int
     */
    public function getCheckType (): int
    {
        return $this->checkType;
    }

    /**
     * @param int $checkType
     */
    public function setCheckType ( int $checkType )
    {
        $this->checkType = $checkType;
    }

    /**
     * @return bool
     */
    public function getOpenedCheckCancellation (): bool
    {
        return $this->cancelOpenedCheck;
    }

    /**
     * @param bool $cancelOpenedCheck
     */
    public function setOpenedCheckCancellation ( bool $cancelOpenedCheck )
    {
        $this->cancelOpenedCheck = $cancelOpenedCheck;
    }

    /**
     * @return bool
     */
    public function isPrint (): bool
    {
        return $this->print;
    }

    /**
     * @param bool $print
     */
    public function setPrint ( bool $print )
    {
        $this->print = !$print;
    }

    /**
     * @return string
     */
    public function getCashierName (): string
    {
        return $this->cashierName;
    }

    /**
     * @param string $cashierName
     */
    public function setCashierName ( string $cashierName )
    {
        $this->cashierName = $cashierName;
    }

    /**
     * @return int
     */
    public function getTax (): int
    {
        return $this->tax;
    }

    /**
     * @param int $tax
     */
    public function setTax ( int $tax )
    {
        $this->tax = $tax;
    }

    /**
     * @return array
     */
    public function getStrings (): array
    {
        return $this->strings;
    }

    /**
     * @param array $strings
     */
    public function setStrings ( array $strings )
    {
        $this->strings = $strings;
    }

    public function addString(CheckString $string )
    {
        $this->strings[] = $string;
    }

    /**
     * @return float
     */
    public function getCash (): float
    {
        return $this->cash;
    }

    /**
     * @param float $cash
     */
    public function setCash ( float $cash )
    {
        $this->cash = $cash;
    }

    /**
     * @return float
     */
    public function getCashlessPayment1 (): float
    {
        return $this->cashlessPayment1;
    }

    /**
     * @param float $cashlessPayment1
     */
    public function setCashlessPayment1 ( float $cashlessPayment1 )
    {
        $this->cashlessPayment1 = $cashlessPayment1;
    }

    /**
     * @return float
     */
    public function getCashlessPayment2 (): float
    {
        return $this->cashlessPayment2;
    }

    /**
     * @param float $cashlessPayment2
     */
    public function setCashlessPayment2 ( float $cashlessPayment2 )
    {
        $this->cashlessPayment2 = $cashlessPayment2;
    }

    /**
     * @return float
     */
    public function getCashlessPayment3 (): float
    {
        return $this->cashlessPayment3;
    }

    /**
     * @param float $cashlessPayment3
     */
    public function setCashlessPayment3 ( float $cashlessPayment3 )
    {
        $this->cashlessPayment3 = $cashlessPayment3;
    }
}