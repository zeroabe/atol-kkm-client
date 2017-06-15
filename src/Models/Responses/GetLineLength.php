<?php
namespace KKMClient\Models\Responses;


use KKMClient\Interfaces\ResponseInterface;
use KKMClient\Traits\CommonResponseTrait;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\AccessType;

/**
 * Class GetLineLength
 * @package KKMClient\Models\Responses
 * @AccessType("public_method")
 */
class GetLineLength implements ResponseInterface
{
    use CommonResponseTrait;

    /**
     * @var int
     * @SerializedName("LineLength")
     * @Type("integer")
     */
    protected $length = 0;

    public function getLength() : int
    {
        return $this->length;
    }

    public function setLength( int $length )
    {
        $this->length = $length;
    }
}