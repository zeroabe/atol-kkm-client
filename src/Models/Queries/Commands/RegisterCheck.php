<?php

namespace KKMClient\Models\Queries\Commands;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\AccessType;
use JMS\Serializer\Annotation\Accessor;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\Expose;
use KKMClient\Interfaces\CommandInterface;
use KKMClient\Models\Queries\Chunks\CheckProperty;
use KKMClient\Models\Queries\Chunks\CheckString;
use KKMClient\Traits\CommonCommandTrait;

/**
 * Class RegisterCheck
 * @ExclusionPolicy("none")
 * @package KKMClient\Models\Queries\Commands
 */
class RegisterCheck implements CommandInterface
{
    use CommonCommandTrait;

    /**
     * @var string
     * @SerializedName("KktNumber")
     * @Type("string")
     * @Accessor(getter="getFactoryNumber",setter="setFactoryNumber")
     */
    private $factoryNumber = "";

    /**
     * @var string
     * @SerializedName("InnKkm")
     * @Type("string")
     * @AccessType("public_method")
     * @Accessor(getter="getKkmInn",setter="setKkmInn")
     */
    private $kkmInn = "";

    /**
     * @var boolean
     * @SerializedName("IsFiscalCheck")
     * @Type("boolean")
     * @Accessor(getter="isFiscal",setter="setFiscal")
     */
    private $fiscal = false;

    /**
     * @var integer
     * @SerializedName("TypeCheck")
     * @Type("integer")
     */
    private $checkType;

    /**
     * @var boolean
     * @SerializedName("CancelOpenedCheck")
     * @Type("boolean")
     * @Accessor(getter="getOpenedCheckCancellation",setter="setOpenedCheckCancellation")
     */
    private $cancelOpenedCheck = false;

    /**
     * @var boolean
     * @SerializedName("NotPrint")
     * @Type("boolean")
     * @Accessor(getter="isPrint",setter="setPrint")
     */
    private $print = false;

    /**
     * @var string
     * @SerializedName("CashierName")
     * @Type("string")
     */
    private $cashierName = '';

    /**
     * @var string
     * @SerializedName("ClientAddress")
     * @Type("string")
     * @Accessor(getter="getClientAddress",setter="setClientAddress")
     */
    private $clientAddress = '';
    /**
     * @var integer
     * @SerializedName("TaxVariant")
     * @Type("integer")
     */
    private $tax = 0;

    /**
     * @var array
     * @SerializedName("CheckProps")
     * @Type("array<KKMClient\Models\Queries\Chunks\CheckProperty>")
     * @Accessor(getter="getProps",setter="setProps")
     */
    private $props = [];

    /**
     * @var array
     * @SerializedName("AdditionalProps")
     * @Type("array<KKMClient\Models\Queries\Chunks\AdditionalCheckProperty>")
     * @Accessor(getter="getAdditionalProps",setter="setAdditionalProps")
     */
    private $additionalProps = [];

    /**
     * @var array
     * @SerializedName("CheckStrings")
     * @Type("array<KKMClient\Models\Queries\Chunks\CheckString>")
     * @Accessor(getter="getStrings",setter="setStrings")
     */
    private $strings = [];

    /**
     * @var float
     * @SerializedName("Cash")
     * @Type("float")
     */
    private $cash;

    /**
     * @var float
     * @SerializedName("CashLessType1")
     * @Type("float")
     */
    private $cashlessPayment1;

    /**
     * @var float
     * @SerializedName("CashLessType2")
     * @Type("float")
     */
    private $cashlessPayment2;

    /**
     * @var float
     * @SerializedName("CashLessType3")
     * @Type("float")
     */
    private $cashlessPayment3;

    public function getName () : string
    {
        return 'RegisterCheck';
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
     * @return $this
     */
    public function setKkmInn ( string $kkmInn )
    {
        $this->kkmInn = $kkmInn;
        return $this;
    }

    /**
     * @return bool
     */
    public function isFiscal (): bool
    {
        return $this->fiscal;
    }

    /**
     * @param bool $isFiscal
     * @return $this
     */
    public function setFiscal ( bool $isFiscal )
    {
        $this->fiscal = $isFiscal;
        return $this;
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
     * @return $this
     */
    public function setCheckType ( int $checkType )
    {
        $this->checkType = $checkType;
        return $this;
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
     * @return $this
     */
    public function setOpenedCheckCancellation ( bool $cancelOpenedCheck )
    {
        $this->cancelOpenedCheck = $cancelOpenedCheck;
        return $this;
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
     * @return $this
     */
    public function setPrint ( bool $print )
    {
        $this->print = $print;
        return $this;
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
     * @return $this
     */
    public function setCashierName ( string $cashierName )
    {
        $this->cashierName = $cashierName;
        return $this;
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
     * @return $this
     */
    public function setTax ( int $tax )
    {
        $this->tax = $tax;
        return $this;
    }

    /**
     * @return array
     */
    public function getAdditionalProps (): array
    {
        return $this->additionalProps;
    }

    /**
     * @param array $additionalProps
     * @return $this
     */
    public function setAdditionalProps ( array $additionalProps )
    {
        $this->additionalProps = $additionalProps;
        return $this;
    }



    /**
     * @return array
     */
    public function getProps (): array
    {
        return $this->props;
    }

    /**
     * @param array $props
     * @return $this
     */
    public function setProps ( array $props )
    {
        $this->props = $props;
        return $this;
    }

    /**
     * @param CheckProperty $prop
     * @return $this
     */
    public function addProp ( CheckProperty $prop )
    {
        $this->props[] = $prop;
        return $this;
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
     * @return $this
     */
    public function setStrings ( array $strings )
    {
        $this->strings = $strings;
        return $this;
    }

    /**
     * @param CheckString $string
     * @return $this
     */
    public function addString( CheckString $string )
    {
        $this->strings[] = $string;
        return $this;
    }

    /**
     * @return float
     */
    public function getCash ()
    {
        return $this->cash;
    }

    /**
     * @param float $cash
     * @return $this
     */
    public function setCash ( float $cash )
    {
        $this->cash = $cash;
        return $this;
    }

    /**
     * @return float
     */
    public function getCashlessPayment1 ()
    {
        return $this->cashlessPayment1;
    }

    /**
     * @param float $cashlessPayment1
     * @return $this
     */
    public function setCashlessPayment1 ( float $cashlessPayment1 )
    {
        $this->cashlessPayment1 = $cashlessPayment1;
        return $this;
    }

    /**
     * @return float
     */
    public function getCashlessPayment2 ()
    {
        return $this->cashlessPayment2;
    }

    /**
     * @param float $cashlessPayment2
     * @return $this
     */
    public function setCashlessPayment2 ( float $cashlessPayment2 )
    {
        $this->cashlessPayment2 = $cashlessPayment2;
        return $this;
    }

    /**
     * @return float
     */
    public function getCashlessPayment3 ()
    {
        return $this->cashlessPayment3;
    }

    /**
     * @param float $cashlessPayment3
     * @return $this
     */
    public function setCashlessPayment3 ( float $cashlessPayment3 )
    {
        $this->cashlessPayment3 = $cashlessPayment3;
        return $this;
    }

    /**
     * @return string
     */
    public function getClientAddress (): string
    {
        return $this->clientAddress;
    }

    /**
     * @param string $clientAddress
     * @return $this
     */
    public function setClientAddress ( string $clientAddress )
    {
        $this->clientAddress = $clientAddress;
        return $this;
    }

    /**
     * @return string
     */
    public function getFactoryNumber (): string
    {
        return $this->factoryNumber;
    }

    /**
     * @param string $deviceNumber
     * @return $this
     */
    public function setFactoryNumber ( string $deviceNumber )
    {
        $this->factoryNumber = $deviceNumber;
        return $this;
    }
}