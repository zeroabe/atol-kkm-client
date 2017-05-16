<?php

namespace KKMClient\Factories;

use ReflectionClass;

class ReflectionFactory
{
    /**
     * @param string | \stdClass $class
     * @return ReflectionClass
     */
    public static function getReflection( $class )
    {
        return new ReflectionClass($class);
    }
}