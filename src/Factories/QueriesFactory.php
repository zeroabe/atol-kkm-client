<?php

namespace KKMClient\Factories;

use JMS\Serializer\EventDispatcher\EventDispatcher;
use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;
use KHerGe\JSON\JSON;
use KKMClient\Exceptions\NonexistentClassName;
use KKMClient\Exceptions\UnknownKKMCommand;
use KKMClient\Interfaces\CommandInterface;
use KKMClient\Models\Queries\Enums\Commands;

/**
 * Class QueriesFactory
 * @package KKMClient\Factories
 */
class QueriesFactory
{

    /**
     * @var Serializer
     */
    protected $serializer;

    /**
     * @var JSON
     */
    protected $json;

    /**
     * @var array
     */
    protected $devices = [];

    /**
     * @var array
     */
    protected $commands = [];

    /**
     * QueriesFactory constructor.
     */
    public function __construct ()
    {
        $this->serializer   = SerializerBuilder::create()->configureListeners(function(EventDispatcher $dispatcher) {
        })->build();
        $this->commands     = ReflectionFactory::getReflection(Commands::class)->getConstants();
        $this->json = new JSON();
    }

    /**
     * @param $name
     * @param $arguments
     * @return array|\JMS\Serializer\scalar|mixed|object
     * @throws UnknownKKMCommand
     */
    public function __call ( $name, $arguments = null )
    {
        $class = $this->getCommandClassName($name);
        if($arguments && is_array($arguments) &&  isset($arguments[0])) {
            $attributes     = $this->encodeAttributes($arguments[0], $class);
        } else {
            $attributes = [];
        }
        $queryObject    = $this->serializer->deserialize($attributes, $class, 'json');

        return $queryObject;
    }

    public function serializeCommand( CommandInterface $command )
    {
//        $className = $this->getCommandClassName($command->getName());
        return $this->serializer->serialize($command, 'json');
    }

    /**
     * @param $attributes
     *
     * @return string
     */
    protected function encodeAttributes( $attributes)
    {
        return $this->json->encode($attributes);
    }

    protected function getCommandClassName($commandName)
    {
        $class = "KKMClient\\Models\\Queries\\Commands\\".$commandName;
        if (!class_exists($class))
            throw new NonexistentClassName($commandName);
        return $class;
    }
}