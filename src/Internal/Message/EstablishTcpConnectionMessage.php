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

namespace Prooph\EventStoreClient\Internal\Message;

use Amp\Promise;
use Prooph\EventStoreClient\Internal\NodeEndPoints;

/** @internal */
class EstablishTcpConnectionMessage implements Message
{
    private NodeEndPoints $nodeEndPoints;

    public function __construct(NodeEndPoints $nodeEndPoints)
    {
        $this->nodeEndPoints = $nodeEndPoints;
    }

    public function nodeEndPoints(): NodeEndPoints
    {
        return $this->nodeEndPoints;
    }

    public function getPromise(): ?Promise
    {
        return null;
    }

    public function __toString(): string
    {
        return 'EstablishTcpConnectionMessage';
    }
}
