<?php

namespace KKMClient\Handlers;

use JMS\Serializer\Handler\SubscribingHandlerInterface;
use JMS\Serializer\GraphNavigator;
use JMS\Serializer\JsonDeserializationVisitor;
use JMS\Serializer\Context;
use KKMClient\Factories\QueriesFactory;
use KKMClient\Models\Responses\CommandInformation;
use KHerGe\JSON\JSON;

class CommandInformationHandler implements SubscribingHandlerInterface
{
    const NAMESPACE = 'KKMClient\\Models\\Responses\\';
    /**
     * Return format:
     *
     *      array(
     *          array(
     *              'direction' => GraphNavigator::DIRECTION_SERIALIZATION,
     *              'format' => 'json',
     *              'type' => 'DateTime',
     *              'method' => 'serializeDateTimeToJson',
     *          ),
     *      )
     *
     * The direction and method keys can be omitted.
     *
     * @return array
     */
    public static function getSubscribingMethods ()
    {
        return [
            [
                'direction' => GraphNavigator::DIRECTION_DESERIALIZATION,
                'format'    => 'json',
                'type'      => CommandInformation::class,
                'method'    => 'getResultingObjectClass'
            ]
        ];
    }

    public function getResultingObjectClass(
        JsonDeserializationVisitor $visitor,
        $object,
        array $type,
        Context $context
    )
    {

        $className = $object['Rezult']['Command'];
        $data = (new JSON())->encode($object['Rezult']);
        $result = (new QueriesFactory())->deSerializeResponse($data, $className);
//        dump($result);
        return $result;
    }
}