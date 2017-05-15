<?php

namespace KKMClient\Queries;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\AccessType;
use JMS\Serializer\Annotation\Accessor;
use JMS\Serializer\Annotation\Type;

/**
 * Class CheckProperty
 * @package KKMClient\Queries
 * @AccessType("public_method")
 */
class CheckProperty
{
    /**
     * @var boolean
     * @SerializedName("Print")
     * @Accessor(getter="isPrint",setter="setPrint")
     * @Type("boolean")
     */
    protected $print;

    /**
     * @var boolean
     * @SerializedName("PrintInHeader")
     * @Accessor(getter="isPrintInHead",setter="setPrintInHead")
     * @Type("boolean")
     */
    protected $printInHeader;

    /**
     * @var integer
     * @SerializedName("Teg")
     * @Type("integer")
     */
    protected $tag;

    /**
     * @var string
     * @SerializedName("Prop")
     * @Type("string")
     */
    protected $value;

    public function __construct ()
    {
        //TODO Implement this
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
        $this->print = $print;
    }

    /**
     * @return bool
     */
    public function isPrintInHeader (): bool
    {
        return $this->printInHeader;
    }

    /**
     * @param bool $printInHeader
     */
    public function setPrintInHeader ( bool $printInHeader )
    {
        $this->printInHeader = $printInHeader;
    }

    /**
     * @return int
     */
    public function getTag (): int
    {
        return $this->tag;
    }

    /**
     * @param int $tag
     */
    public function setTag ( int $tag )
    {
        $this->tag = $tag;
    }

    /**
     * @return string
     */
    public function getValue (): string
    {
        return $this->value;
    }

    /**
     * @param string $value
     */
    public function setValue ( string $value )
    {
        $this->value = $value;
    }


}