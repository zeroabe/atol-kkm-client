<?php

namespace KKMClient\Subscribers;

use JMS\Serializer\EventDispatcher\EventSubscriberInterface;
use JMS\Serializer\EventDispatcher\PreSerializeEvent;

class PreSerializeEventSubscriber implements EventSubscriberInterface
{
    public static function getSubscribedEvents ()
    {
        return [
            [
                'event'     => 'serializer.pre_serialize',
                'method'    => 'onPreSerialize'
            ]
        ];
    }

    public function onPreSerialize(PreSerializeEvent $event)
    {
        $context    = $event->getContext();
        $visitor    = $event->getVisitor();
        $type       = $event->getType();
        $object     = $event->getObject();
        var_dump($context);

    }
}