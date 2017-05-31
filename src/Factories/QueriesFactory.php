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
     * @var string
     */
    protected $format = 'json';

    /**
     * QueriesFactory constructor.
     * @param $format string    Format for serializing and deserializing objects
     */
    public function __construct ( string $format = 'json' )
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
            $attributes     = $this->encodeAttributes($arguments[0]);
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

    public function deSerializeResponse( string $body, string $class )
    {
        $className = "KKMClient\\Models\\Responses\\".$class;
        if (!class_exists($className))
            throw new NonexistentClassName($class);

        return $this->serializer->deserialize($body, $className, 'json');
    }

    private function fromString( string $data )
    {

    }

    /**
     * @param $attributes
     *
     * @return string
     */
    protected function encodeAttributes( $attributes )
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