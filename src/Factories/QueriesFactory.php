<?php

namespace KKMClient\Factories;

use JMS\Serializer\EventDispatcher\EventDispatcher;
use JMS\Serializer\EventDispatcher\PreSerializeEvent;
use JMS\Serializer\Exception\LogicException;
use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;
use KHerGe\JSON\JSON;
use KKMClient\Models\Queries\Enums\Commands;
use KKMClient\Factories\ReflectionFactory;
use KKMClient\Subscribers\PreSerializeEventSubscriber;

class QueriesFactory
{

    /**
     * @var Serializer
     */
    protected $serializer;

    protected $json;

    /**
     * @var array
     */
    protected $commands = [];

    public function __construct ()
    {
        $this->serializer   = SerializerBuilder::create()->configureListeners(function(EventDispatcher $dispatcher) {
//            $dispatcher->addListener('serializer.pre_serialize', function(PreSerializeEvent $event) {
//
//            });
            $dispatcher->addSubscriber(new PreSerializeEventSubscriber());
        })->build();
        $this->commands     = ReflectionFactory::getReflection(Commands::class)->getConstants();
        $this->json = new JSON();
    }

    public function __call ( $name, $arguments )
    {
        $name = ucfirst($name);
        if (in_array($name, $this->commands)) {
            $class = "KKMClient\\Models\\Queries\\Commands\\".$name;
            $attributes = $this->compareAttributes($arguments, $class);
            $queryObject = $this->serializer->deserialize($attributes, $class, 'json');
            return $queryObject;
        }
        return null;
    }

    protected function compareAttributes($attributes, $className)
    {
        $reflection = ReflectionFactory::getReflection($className);
        $properties = $reflection->getProperties();
        $result = [];
//        foreach ( $properties as $property ) {
//
//            if($property->isProtected()) {
//                $doc = $property->getDocComment();
//                $name = ucfirst($property->getName());
//                if(!isset($attributes[$name])) {
//                    throw new LogicException("There is no ". $name. " attribute in attributes array.");
//                } else {
//                    $result[$name] = $attributes[$name];
//                }
//            }
//        }
        return $this->json->encode($attributes);
    }
}