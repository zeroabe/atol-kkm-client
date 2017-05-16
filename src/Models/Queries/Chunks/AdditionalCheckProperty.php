<?php

namespace KKMClient\Models\Queries\Chunks;

use KKMClient\Models\Queries\Chunks\CheckProperty;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Accessor;
use JMS\Serializer\Annotation\Type;


class AdditionalCheckProperty extends CheckProperty
{
    /**
     * @var string
     * @SerializedName("NameProp")
     * @Accessor(getter="getPropName",setter="setPropName")
     * @Type("string")
     */
    protected $propName;

    public function __construct ()
    {
        parent::__construct();
    }

    /**
     * @return string
     */
    public function getPropName (): string
    {
        return $this->propName;
    }

    /**
     * @param string $propName
     */
    public function setPropName ( string $propName )
    {
        $this->propName = $propName;
    }


}