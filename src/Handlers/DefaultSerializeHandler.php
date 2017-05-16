<?php

namespace KKMClient\Handlers;

use JMS\Serializer\Handler\SubscribingHandlerInterface;
use JMS\Serializer\GraphNavigator;
use JMS\Serializer\Context;
use JMS\Serializer\JsonSerializationVisitor;

//TODO Разобраться - нужно ли мне это, вообще.
class DefaultSerializeHandler implements SubscribingHandlerInterface
{
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
        // TODO: Implement getSubscribingMethods() method.
    }
}