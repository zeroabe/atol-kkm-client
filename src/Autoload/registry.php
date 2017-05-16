<?php
use Doctrine\Common\Annotations\AnnotationReader;
use Doctrine\Common\Annotations\AnnotationRegistry;

$basePath =  dirname(__FILE__);
do {
    echo $basePath.PHP_EOL;
    $projectRoot = null;
    if(is_dir($basePath.DIRECTORY_SEPARATOR.'vendor')) {
        $projectRoot = $basePath.DIRECTORY_SEPARATOR;
        define('PROJECT_ROOT', $projectRoot);
    } else {
        $basePath = dirname($basePath);
    }
    echo $basePath.PHP_EOL;
    echo $projectRoot.PHP_EOL;
//    exit();
} while (!$projectRoot || $basePath != DIRECTORY_SEPARATOR);

if($projectRoot) {
    unset ($projectRoot);
} else {
    throw new Exception('Please, install composer packages');
}