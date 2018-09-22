<?php
/**
 * This file is part of the prooph/event-store-client.
 * (c) 2018-2018 prooph software GmbH <contact@prooph.de>
 * (c) 2018-2018 Sascha-Oliver Prolic <saschaprolic@googlemail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace ProophTest\EventStoreClient;

use Amp\Success;
use Generator;
use PHPUnit\Framework\TestCase;
use Prooph\EventStoreClient\EventReadResult;
use Prooph\EventStoreClient\EventReadStatus;
use Throwable;

class read_event_of_linkto_to_deleted_event extends TestCase
{
    use SpecificationWithLinkToToDeletedEvents;

    /** @var EventReadResult */
    private $read;

    protected function when(): Generator
    {
        $this->read = yield $this->conn->readEventAsync(
            $this->linkedStreamName,
            0,
            true
        );
    }

    /**
     * @test
     * @throws Throwable
     */
    public function the_linked_event_is_returned(): void
    {
        $this->executeCallback(function () {
            $this->assertNotNull($this->read->event()->link());

            yield new Success();
        });
    }

    /**
     * @test
     * @throws Throwable
     */
    public function the_deleted_event_is_not_resolved(): void
    {
        $this->executeCallback(function () {
            $this->assertNull($this->read->event()->event());

            yield new Success();
        });
    }

    /**
     * @test
     * @throws Throwable
     */
    public function the_status_is_success(): void
    {
        $this->executeCallback(function () {
            $this->assertTrue(EventReadStatus::success()->equals($this->read->status()));

            yield new Success();
        });
    }
}
