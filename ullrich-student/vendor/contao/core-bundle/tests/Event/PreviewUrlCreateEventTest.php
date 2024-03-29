<?php

/*
 * This file is part of Contao.
 *
 * (c) Leo Feyer
 *
 * @license LGPL-3.0-or-later
 */

namespace Contao\CoreBundle\Tests\Event;

use Contao\CoreBundle\Event\PreviewUrlCreateEvent;
use PHPUnit\Framework\TestCase;

/**
 * Tests the PreviewUrlCreateEvent class.
 *
 * @author Leo Feyer <https://github.com/leofeyer>
 */
class PreviewUrlCreateEventTest extends TestCase
{
    /**
     * Tests the getId() method.
     */
    public function testSupportsReadingTheId()
    {
        $event = new PreviewUrlCreateEvent('news', 12);

        $this->assertSame(12, $event->getId());
    }

    /**
     * Tests the getKey() method.
     */
    public function testSupportsReadingTheKey()
    {
        $event = new PreviewUrlCreateEvent('news', 12);

        $this->assertSame('news', $event->getKey());
    }

    /**
     * Tests the query getter and setter.
     */
    public function testSupportsReadingAndWritingTheQueryString()
    {
        $event = new PreviewUrlCreateEvent('news', 12);

        $this->assertNull($event->getQuery());

        $event->setQuery('act=edit&id=12');

        $this->assertSame('act=edit&id=12', $event->getQuery());
    }
}
