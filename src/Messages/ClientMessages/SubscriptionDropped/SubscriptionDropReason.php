<?php

/**
 * This file is part of `prooph/event-store-client`.
 * (c) 2018-2020 Alexander Miertsch <kontakt@codeliner.ws>
 * (c) 2018-2020 Sascha-Oliver Prolic <saschaprolic@googlemail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);
// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: ClientMessageDtos.proto

namespace Prooph\EventStoreClient\Messages\ClientMessages\SubscriptionDropped;

use UnexpectedValueException;

/**
 * Protobuf type <code>Prooph.EventStoreClient.Messages.ClientMessages.SubscriptionDropped.SubscriptionDropReason</code>
 */
class SubscriptionDropReason
{
    /**
     * Generated from protobuf enum <code>Unsubscribed = 0;</code>
     */
    const Unsubscribed = 0;
    /**
     * Generated from protobuf enum <code>AccessDenied = 1;</code>
     */
    const AccessDenied = 1;
    /**
     * Generated from protobuf enum <code>NotFound = 2;</code>
     */
    const NotFound = 2;
    /**
     * Generated from protobuf enum <code>PersistentSubscriptionDeleted = 3;</code>
     */
    const PersistentSubscriptionDeleted = 3;
    /**
     * Generated from protobuf enum <code>SubscriberMaxCountReached = 4;</code>
     */
    const SubscriberMaxCountReached = 4;

    private static $valueToName = [
        self::Unsubscribed => 'Unsubscribed',
        self::AccessDenied => 'AccessDenied',
        self::NotFound => 'NotFound',
        self::PersistentSubscriptionDeleted => 'PersistentSubscriptionDeleted',
        self::SubscriberMaxCountReached => 'SubscriberMaxCountReached',
    ];

    public static function name($value)
    {
        if (! isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(\sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }

        return self::$valueToName[$value];
    }

    public static function value($name)
    {
        $const = __CLASS__ . '::' . \strtoupper($name);
        if (! \defined($const)) {
            throw new UnexpectedValueException(\sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }

        return \constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(SubscriptionDropReason::class, \Prooph\EventStoreClient\Messages\ClientMessages\SubscriptionDropped_SubscriptionDropReason::class);