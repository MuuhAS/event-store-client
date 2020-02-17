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

namespace Prooph\EventStoreClient\Messages\ClientMessages;

use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Prooph.EventStoreClient.Messages.ClientMessages.ScavengeDatabaseCompleted</code>
 */
class ScavengeDatabaseCompleted extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.Prooph.EventStoreClient.Messages.ClientMessages.ScavengeDatabaseCompleted.ScavengeResult result = 1;</code>
     */
    protected $result = 0;
    /**
     * Generated from protobuf field <code>string error = 2;</code>
     */
    protected $error = '';
    /**
     * Generated from protobuf field <code>int32 total_time_ms = 3;</code>
     */
    protected $total_time_ms = 0;
    /**
     * Generated from protobuf field <code>int64 total_space_saved = 4;</code>
     */
    protected $total_space_saved = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $result
     *     @type string $error
     *     @type int $total_time_ms
     *     @type int|string $total_space_saved
     * }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\ClientMessageDtos::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.Prooph.EventStoreClient.Messages.ClientMessages.ScavengeDatabaseCompleted.ScavengeResult result = 1;</code>
     * @return int
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Generated from protobuf field <code>.Prooph.EventStoreClient.Messages.ClientMessages.ScavengeDatabaseCompleted.ScavengeResult result = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setResult($var)
    {
        GPBUtil::checkEnum($var, \Prooph\EventStoreClient\Messages\ClientMessages\ScavengeDatabaseCompleted_ScavengeResult::class);
        $this->result = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string error = 2;</code>
     * @return string
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * Generated from protobuf field <code>string error = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setError($var)
    {
        GPBUtil::checkString($var, true);
        $this->error = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 total_time_ms = 3;</code>
     * @return int
     */
    public function getTotalTimeMs()
    {
        return $this->total_time_ms;
    }

    /**
     * Generated from protobuf field <code>int32 total_time_ms = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setTotalTimeMs($var)
    {
        GPBUtil::checkInt32($var);
        $this->total_time_ms = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 total_space_saved = 4;</code>
     * @return int|string
     */
    public function getTotalSpaceSaved()
    {
        return $this->total_space_saved;
    }

    /**
     * Generated from protobuf field <code>int64 total_space_saved = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTotalSpaceSaved($var)
    {
        GPBUtil::checkInt64($var);
        $this->total_space_saved = $var;

        return $this;
    }
}
