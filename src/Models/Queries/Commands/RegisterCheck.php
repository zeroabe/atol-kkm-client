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
    private $print = true;

    /**
     * @var string
     * @SerializedName("CashierName")
     * @Type("string")
     */
    private $cashierName = '';

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
     */
    public function setKkmInn ( string $kkmInn )
    {
        $this->kkmInn = $kkmInn;
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
     */
    public function setFiscal ( bool $isFiscal )
    {
        $this->fiscal = $isFiscal;
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
    public function getAdditionalProps (): array
    {
        return $this->additionalProps;
    }

    /**
     * @param array $additionalProps
     */
    public function setAdditionalProps ( array $additionalProps )
    {
        $this->additionalProps = $additionalProps;
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
     */
    public function setProps ( array $props )
    {
        $this->props = $props;
    }

    /**
     * @param CheckProperty $prop
     */
    public function addProp ( CheckProperty $prop )
    {
        $this->props[] = $prop;
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

    /**
     * @param CheckString $string
     */
    public function addString( CheckString $string )
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