<?php

namespace KKMClient\Models\Devices;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Accessor;
use JMS\Serializer\Annotation\AccessType;
use JMS\Serializer\Annotation\Type;

/**
 * Class Device
 * @package KKMClient\Models\Devices
 * @AccessType("public_method")
 */
class Device
{
    /**
     * @var integer
     * @SerializedName("NumDevice")
     * @Accessor(getter="getDeviceNumber",setter="setDeviceNumber")
     * @Type("integer")
     */
    protected $deviceNumber;

    /**
     * @var string
     * @SerializedName("IdDevice")
     * @Accessor(getter="getDeviceId",setter="setDeviceId")
     * @Type("string")
     */
    protected $deviceId;

    /**
     * @var boolean
     * @SerializedName("OnOff")
     * @Accessor(getter="getState",setter="setState")
     * @Type("boolean")
     */
    protected $state;

    /**
     * @var boolean
     * @SerializedName("Active")
     * @Accessor(getter="getStatus",setter="setStatus")
     * @Type("boolean")
     */
    protected $status;

    /**
     * @var string
     * @SerializedName("TypeDevice")
     * @Accessor(getter="getDeviceType",setter="setDeviceType")
     * @Type("boolean")
     */
    protected $deviceType;

    /**
     * @var string
     * @SerializedName("IdDeviceType")
     * @Accessor(getter="getDeviceTypeId",setter="setDeviceTypeId")
     * @Type("string")
     */
    protected $deviceTypeId;

    /**
     * @var string
     * @SerializedName("IP")
     * @Accessor(getter="getIP",setter="setIP")
     * @Type("string")
     */
    protected $IP;

    /**
     * @var string
     * @SerializedName("NameDevice")
     * @Accessor(getter="getDeviceName",setter="setDeviceName")
     * @Type("string")
     */
    protected $deviceName;

    /**
     * @var string
     * @serializedName("KktNumber")
     * @Accessor(getter="getKktNumber",setter="setKktNumber")
     * @Type("string")
     */
    protected $kktNumber;

    /**
     * @var string
     * @SerializedName("INN")
     * @Accessor(getter="getInn",setter="setInn")
     * @Type("string")
     */
    protected $inn;

    /**
     * @var string
     * @SerializedName("TaxVariant")
     * @Accessor(getter="getTax",setter="setTax")
     * @Type("string")
     */
    protected $tax;

    /**
     * @var string
     * @SerializedName("AddDate")
     * @Accessor(getter="getDateAdded",setter="setDateAdded")
     * @Type("string")
     */
    protected $dateAdded;

    /**
     * @var string
     * @SerializedName("OFD_Error")
     * @Accessor(getter="getOFDError",setter="setOFDError")
     * @Type("string")
     */
    protected $OFDError;

    /**
     * @var integer
     * @SerializedName("OFD_NumErrorDoc")
     * @Accessor(getter="getOFDNumErrorDoc",setter="setOFDNumErrorDoc")
     * @Type("integer")
     */
    protected $OFDNumErrorDoc;

    /**
     * @var string
     * @SerializedName("OFD_DateErrorDoc")
     * @Accessor(getter="getOFDDateErrorDoc",setter="setOFDDateErrorDoc")
     * @Type("string")
     */
    protected $OFDDateErrorDoc;

    /**
     * @var string
     * @SerializedName("FN_DateEnd")
     * @Accessor(getter="getFNDateEnd",setter="setFNDateEnd")
     * @Type("DateTime<'Y-m-d\TH:i:s'>")
     */
    protected $FNDateEnd;

    /**
     * @var boolean
     * @SerializedName("FN_MemOverflow")
     * @Accessor(getter="isFNMemOverflow",setter="setFNMemOverflow")
     * @Type("boolean")
     */
    protected $FNMemOverflow;

    /**
     * @var boolean
     * @SerializedName("FN_IsFiscal")
     * @Accessor(getter="isFNIsFiscal",setter="setFNIsFiscal")
     * @Type("boolean")
     */
    protected $FNIsFiscal;

    /**
     * @var boolean
     * @SerializedName("PaperOver")
     * @Accessor(getter="isOutOfPaper",setter="setOutOfPaper")
     * @Type("boolean")
     */
    protected $outOfPaper;

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
    public function getDeviceId (): string
    {
        return $this->deviceId;
    }

    /**
     * @param string $deviceId
     */
    public function setDeviceId ( string $deviceId )
    {
        $this->deviceId = $deviceId;
    }

    /**
     * @return bool
     */
    public function getState (): bool
    {
        return $this->state;
    }

    /**
     * @param bool $state
     */
    public function setState ( bool $state )
    {
        $this->state = $state;
    }

    /**
     * @return bool
     */
    public function getStatus (): bool
    {
        return $this->status;
    }

    /**
     * @param bool $status
     */
    public function setStatus ( bool $status )
    {
        $this->status = $status;
    }

    /**
     * @return string
     */
    public function getDeviceType (): string
    {
        return $this->deviceType;
    }

    /**
     * @param string $deviceType
     */
    public function setDeviceType ( string $deviceType )
    {
        $this->deviceType = $deviceType;
    }

    /**
     * @return string
     */
    public function getDeviceTypeId (): string
    {
        return $this->deviceTypeId;
    }

    /**
     * @param string $deviceTypeId
     */
    public function setDeviceTypeId ( string $deviceTypeId )
    {
        $this->deviceTypeId = $deviceTypeId;
    }

    /**
     * @return string
     */
    public function getIP (): string
    {
        return $this->IP;
    }

    /**
     * @param string $IP
     */
    public function setIP ( string $IP )
    {
        $this->IP = $IP;
    }

    /**
     * @return string
     */
    public function getDeviceName (): string
    {
        return $this->deviceName;
    }

    /**
     * @param string $deviceName
     */
    public function setDeviceName ( string $deviceName )
    {
        $this->deviceName = $deviceName;
    }

    /**
     * @return string
     */
    public function getKktNumber (): string
    {
        return $this->kktNumber;
    }

    /**
     * @param string $kktNumber
     */
    public function setKktNumber ( string $kktNumber )
    {
        $this->kktNumber = $kktNumber;
    }

    /**
     * @return string
     */
    public function getInn (): string
    {
        return $this->inn;
    }

    /**
     * @param string $inn
     */
    public function setInn ( string $inn )
    {
        $this->inn = $inn;
    }

    /**
     * @return string
     */
    public function getTax (): string
    {
        return $this->tax;
    }

    /**
     * @param string $tax
     */
    public function setTax ( string $tax )
    {
        $this->tax = $tax;
    }

    /**
     * @return string
     */
    public function getDateAdded (): string
    {
        return $this->dateAdded;
    }

    /**
     * @param string $dateAdded
     */
    public function setDateAdded ( string $dateAdded )
    {
        $this->dateAdded = $dateAdded;
    }

    /**
     * @return string
     */
    public function getOFDError (): string
    {
        return $this->OFDError;
    }

    /**
     * @param string $OFDError
     */
    public function setOFDError ( string $OFDError )
    {
        $this->OFDError = $OFDError;
    }

    /**
     * @return int
     */
    public function getOFDNumErrorDoc (): int
    {
        return $this->OFDNumErrorDoc;
    }

    /**
     * @param int $OFDNumErrorDoc
     */
    public function setOFDNumErrorDoc ( int $OFDNumErrorDoc )
    {
        $this->OFDNumErrorDoc = $OFDNumErrorDoc;
    }

    /**
     * @return string
     */
    public function getOFDDateErrorDoc (): string
    {
        return $this->OFDDateErrorDoc;
    }

    /**
     * @param string $OFDDateErrorDoc
     */
    public function setOFDDateErrorDoc ( string $OFDDateErrorDoc )
    {
        $this->OFDDateErrorDoc = $OFDDateErrorDoc;
    }

    /**
     * @return \DateTime|string
     */
    public function getFNDateEnd (): \DateTime
    {
        return $this->FNDateEnd;
    }

    /**
     * @param \DateTime $FNDateEnd
     */
    public function setFNDateEnd ( \DateTime $FNDateEnd )
    {
        $this->FNDateEnd = $FNDateEnd;
    }

    /**
     * @return bool
     */
    public function isFNMemOverflow (): bool
    {
        return $this->FNMemOverflow;
    }

    /**
     * @param bool $FNMemOverflow
     */
    public function setFNMemOverflow ( bool $FNMemOverflow )
    {
        $this->FNMemOverflow = $FNMemOverflow;
    }

    /**
     * @return bool
     */
    public function isFNIsFiscal (): bool
    {
        return $this->FNIsFiscal;
    }

    /**
     * @param bool $FNIsFiscal
     */
    public function setFNIsFiscal ( bool $FNIsFiscal )
    {
        $this->FNIsFiscal = $FNIsFiscal;
    }

    /**
     * @return bool
     */
    public function isOutOfPaper (): bool
    {
        return $this->outOfPaper;
    }

    /**
     * @param bool $outOfPaper
     */
    public function setOutOfPaper ( bool $outOfPaper )
    {
        $this->outOfPaper = $outOfPaper;
    }
}