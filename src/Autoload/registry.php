<?php
use Doctrine\Common\Annotations\AnnotationReader;
use Doctrine\Common\Annotations\AnnotationRegistry;

    $basePath =  dirname(dirname(dirname(__FILE__)));
    echo $basePath.PHP_EOL;
    $projectRoot = null;
    if(is_dir($basePath.DIRECTORY_SEPARATOR.'vendor')) {
        $projectRoot = $basePath;
        define('PROJECT_ROOT', $projectRoot);
    } else {
        $basePath = dirname($basePath);
    }
    echo $basePath.PHP_EOL;
    echo $projectRoot.PHP_EOL;


if(!$projectRoot) {
//    unset ($projectRoot);
    throw new Exception('Please, install composer packages');
}
unset($projectRoot);

AnnotationRegistry::registerFile(PROJECT_ROOT."/vendor/jms/serializer/src/JMS/Serializer/Annotation/SerializedName.php");
AnnotationRegistry::registerAutoloadNamespace('JMS\Serializer\Annotation',
    PROJECT_ROOT . "/vendor/jms/serializer/src");