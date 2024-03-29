<?php

/*
 * This file is part of Contao.
 *
 * (c) Leo Feyer
 *
 * @license LGPL-3.0-or-later
 */

namespace Contao\CoreBundle\Tests\DataCollector;

use Contao\ContentImage;
use Contao\ContentText;
use Contao\CoreBundle\DataCollector\ContaoDataCollector;
use Contao\CoreBundle\Framework\Adapter;
use Contao\CoreBundle\Tests\TestCase;
use Contao\LayoutModel;
use Contao\System;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Tests the ContaoDataCollector class.
 *
 * @author Leo Feyer <https://github.com/leofeyer>
 */
class ContaoDataCollectorTest extends TestCase
{
    /**
     * Tests collecting data in the back end.
     */
    public function testCollectsDataInBackEnd()
    {
        $GLOBALS['TL_DEBUG'] = [
            'classes_set' => [System::class],
            'classes_aliased' => ['ContentText' => ContentText::class],
            'classes_composerized' => ['ContentImage' => ContentImage::class],
            'additional_data' => 'data',
        ];

        $collector = new ContaoDataCollector(['contao/core-bundle' => '4.0.0']);
        $collector->collect(new Request(), new Response());

        $this->assertSame(['ContentText' => ContentText::class], $collector->getClassesAliased());
        $this->assertSame(['ContentImage' => ContentImage::class], $collector->getClassesComposerized());

        $this->assertSame(
            [
                'version' => '4.0.0',
                'framework' => true,
                'models' => 0,
                'frontend' => false,
                'preview' => false,
                'layout' => '',
                'template' => '',
            ],
            $collector->getSummary()
        );

        $this->assertSame('4.0.0', $collector->getContaoVersion());
        $this->assertSame([System::class], $collector->getClassesSet());
        $this->assertSame(['additional_data' => 'data'], $collector->getAdditionalData());
        $this->assertSame('contao', $collector->getName());

        unset($GLOBALS['TL_DEBUG']);
    }

    /**
     * Tests collecting data in the front end.
     */
    public function testCollectsDataInFrontEnd()
    {
        $layout = new \stdClass();
        $layout->name = 'Default';
        $layout->id = 2;
        $layout->template = 'fe_page';

        $adapter = $this
            ->getMockBuilder(Adapter::class)
            ->setMethods(['__call'])
            ->disableOriginalConstructor()
            ->getMock()
        ;

        $adapter
            ->method('__call')
            ->willReturn($layout)
        ;

        global $objPage;

        $objPage = new \stdClass();
        $objPage->layoutId = 2;

        $collector = new ContaoDataCollector(['contao/core-bundle' => 'dev-master']);
        $collector->setFramework($this->mockContaoFramework(null, null, [LayoutModel::class => $adapter]));
        $collector->collect(new Request(), new Response());

        $this->assertSame(
            [
                'version' => 'dev-master',
                'framework' => false,
                'models' => 0,
                'frontend' => true,
                'preview' => false,
                'layout' => 'Default (ID 2)',
                'template' => 'fe_page',
            ],
            $collector->getSummary()
        );

        unset($GLOBALS['objPage']);
    }

    /**
     * Tests that an empty array is returned if $this->data is not an array.
     */
    public function testReturnsAnEmtpyArrayIfTheDataIsNotAnArray()
    {
        $collector = new ContaoDataCollector([]);
        $collector->unserialize('N;');

        $this->assertSame([], $collector->getAdditionalData());
    }

    /**
     * Tests that an empty array is returned if the key is unknown.
     */
    public function testReturnsAnEmptyArrayIfTheKeyIsUnknown()
    {
        $collector = new ContaoDataCollector([]);

        $method = new \ReflectionMethod($collector, 'getData');
        $method->setAccessible(true);

        $this->assertSame([], $method->invokeArgs($collector, ['foo']));
    }
}
