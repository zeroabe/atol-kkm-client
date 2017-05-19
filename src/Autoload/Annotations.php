<?php

namespace Autoload;

use Doctrine\Common\Annotations\AnnotationRegistry;

class Annotations {
    public static function registry()
    {
        $path = self::getPath();
        AnnotationRegistry::registerFile($path."/vendor/jms/serializer/src/JMS/Serializer/Annotation/SerializedName.php");
        AnnotationRegistry::registerAutoloadNamespace('JMS\Serializer\Annotation',
            $path . "/vendor/jms/serializer/src");
    }

    private static function getPath()
    {
        $basePath       =  dirname(dirname(dirname(__FILE__)));
        $projectRoot    = null;
        if(is_dir($basePath.DIRECTORY_SEPARATOR.'vendor')) {
            $projectRoot = $basePath;
        } else {
            $basePath = dirname(dirname($basePath));
            if(is_dir($basePath.DIRECTORY_SEPARATOR.'vendor')) {
                $projectRoot = $basePath;
            }
        }
        if(!$projectRoot) {
            throw new \Exception('Please, install composer packages');
        }
        return $projectRoot;
    }
}