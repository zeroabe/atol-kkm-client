<?php

namespace KKMClient\Models\Queries\Commands;


use KKMClient\Interfaces\CommandInterface;
use KKMClient\Traits\CommonCommandTrait;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\AccessType;

/**
 * Class CommandInformation
 * @package KKMClient\Models\Queries\Commands
 * @AccessType("public_methods")
 */
class CommandInformation implements CommandInterface
{
    use CommonCommandTrait;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("IdCommand")
     */
    private $id;

    public function getName() :string
    {
        return "GetRezult";
    }

    public function getId() : string
    {
        return $this->id;
    }

    public function setId(string $id = null)
    {
        $this->id = $id;
    }
}