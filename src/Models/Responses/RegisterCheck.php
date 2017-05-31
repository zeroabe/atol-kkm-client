<?php

namespace KKMClient\Models\Responses;


use KKMClient\Interfaces\ResponseInterface;
use KKMClient\Traits\CommonResponseTrait;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\Accessor;
use JMS\Serializer\Annotation\AccessType;


/**
 * Class RegisterCheck
 * @package KKMClient\Models\Responses
 * @AccessType("public_method");
 *
 */
class RegisterCheck implements ResponseInterface
{
    use CommonResponseTrait;

    /**
     * @var string
     * @Type("string)
     * @SerializedName("URL")
     */
    protected $url;

    /**
     * @var integer
     * @Type("integer")
     * @SerializedName("CheckNumber")
     */
    protected $checkNumber;

    /**
     * @var integer
     * @SerializedName("SessionNumber")
     * @Type("integer")
     */
    protected $sessionNumber;

    /**
     * @var integer
     * @SerializedName("LineLength")
     * @Type("integer")
     */
    protected $lineLength;

    /**
     * @var string|null
     * @SerializedName("Info")
     * @Type("string")
     */
    protected $info;

    /**
     * @return string
     */
    public function getUrl (): string
    {
        return $this->url;
    }

    /**
     * @param string $url
     */
    public function setUrl ( string $url )
    {
        $this->url = $url;
    }

    /**
     * @return int
     */
    public function getCheckNumber (): int
    {
        return $this->checkNumber;
    }

    /**
     * @param int $checkNumber
     */
    public function setCheckNumber ( int $checkNumber )
    {
        $this->checkNumber = $checkNumber;
    }

    /**
     * @return int
     */
    public function getSessionNumber (): int
    {
        return $this->sessionNumber;
    }

    /**
     * @param int $sessionNumber
     */
    public function setSessionNumber ( int $sessionNumber )
    {
        $this->sessionNumber = $sessionNumber;
    }

    /**
     * @return int
     */
    public function getLineLength (): int
    {
        return $this->lineLength;
    }

    /**
     * @param int $lineLength
     */
    public function setLineLength ( int $lineLength )
    {
        $this->lineLength = $lineLength;
    }

    /**
     * @return null|string
     */
    public function getInfo ()
    {
        return $this->info;
    }

    /**
     * @param null|string $info
     */
    public function setInfo ( $info )
    {
        $this->info = $info;
    }
}