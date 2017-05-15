<?php

namespace KKMClient\Queries;

use KKMClient\Queries\CheckProperty;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Accessor;


class AdditionalCheckProperty extends CheckProperty
{
    /**
     * @var string
     * @SerializedName("NameProp")
     * @Accessor(getter="getPropName",setter="setPropName")
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