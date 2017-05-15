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

    public function __construct () { }



}