<?php

/*
 * This file is part of Contao.
 *
 * (c) Leo Feyer
 *
 * @license LGPL-3.0-or-later
 */

namespace Contao\CalendarBundle\Tests\DependencyInjection;

use Contao\CalendarBundle\DependencyInjection\ContaoCalendarExtension;
use Contao\CalendarBundle\EventListener\GeneratePageListener;
use Contao\CalendarBundle\EventListener\InsertTagsListener;
use Contao\CalendarBundle\EventListener\PreviewUrlConvertListener;
use Contao\CalendarBundle\EventListener\PreviewUrlCreateListener;
use Contao\CalendarBundle\Picker\EventPickerProvider;
use Contao\CoreBundle\Framework\FrameworkAwareInterface;
use PHPUnit\Framework\TestCase;
use Symfony\Component\DependencyInjection\ChildDefinition;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBag;

/**
 * Tests the ContaoCalendarExtension class.
 *
 * @author Leo Feyer <https://github.com/leofeyer>
 */
class ContaoCalendarExtensionTest extends TestCase
{
    /**
     * @var ContainerBuilder
     */
    private $container;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        parent::setUp();

        $this->container = new ContainerBuilder(new ParameterBag(['kernel.debug' => false]));

        $extension = new ContaoCalendarExtension();
        $extension->load([], $this->container);
    }

    /**
     * Tests the contao_calendar.listener.generate_page service.
     */
    public function testRegistersTheGeneratePageListener()
    {
        $this->assertTrue($this->container->has('contao_calendar.listener.generate_page'));

        $definition = $this->container->getDefinition('contao_calendar.listener.generate_page');

        $this->assertSame(GeneratePageListener::class, $definition->getClass());
        $this->assertTrue($definition->isPublic());
        $this->assertSame('contao.framework', (string) $definition->getArgument(0));
    }

    /**
     * Tests the contao_calendar.listener.insert_tags service.
     */
    public function testRegistersTheInsertTagsListener()
    {
        $this->assertTrue($this->container->has('contao_calendar.listener.insert_tags'));

        $definition = $this->container->getDefinition('contao_calendar.listener.insert_tags');

        $this->assertSame(InsertTagsListener::class, $definition->getClass());
        $this->assertTrue($definition->isPublic());
        $this->assertSame('contao.framework', (string) $definition->getArgument(0));
    }

    /**
     * Tests the contao_calendar.listener.preview_url_create service.
     */
    public function testRegistersThePreviewUrlCreateListener()
    {
        $this->assertTrue($this->container->has('contao_calendar.listener.preview_url_create'));

        $definition = $this->container->getDefinition('contao_calendar.listener.preview_url_create');

        $this->assertSame(PreviewUrlCreateListener::class, $definition->getClass());
        $this->assertSame('request_stack', (string) $definition->getArgument(0));
        $this->assertSame('contao.framework', (string) $definition->getArgument(1));

        $tags = $definition->getTags();

        $this->assertArrayHasKey('kernel.event_listener', $tags);
        $this->assertSame('contao.preview_url_create', $tags['kernel.event_listener'][0]['event']);
        $this->assertSame('onPreviewUrlCreate', $tags['kernel.event_listener'][0]['method']);
    }

    /**
     * Tests the contao_calendar.listener.preview_url_convert service.
     */
    public function testRegistersThePreviewUrlConvertListener()
    {
        $this->assertTrue($this->container->has('contao_calendar.listener.preview_url_convert'));

        $definition = $this->container->getDefinition('contao_calendar.listener.preview_url_convert');

        $this->assertSame(PreviewUrlConvertListener::class, $definition->getClass());
        $this->assertSame('request_stack', (string) $definition->getArgument(0));
        $this->assertSame('contao.framework', (string) $definition->getArgument(1));

        $tags = $definition->getTags();

        $this->assertArrayHasKey('kernel.event_listener', $tags);
        $this->assertSame('contao.preview_url_convert', $tags['kernel.event_listener'][0]['event']);
        $this->assertSame('onPreviewUrlConvert', $tags['kernel.event_listener'][0]['method']);
    }

    /**
     * Tests the contao_calendar.picker.event_provider service.
     */
    public function testRegistersTheEventPickerProvider()
    {
        $this->assertTrue($this->container->has('contao_calendar.picker.event_provider'));

        $definition = $this->container->getDefinition('contao_calendar.picker.event_provider');

        $this->assertSame(EventPickerProvider::class, $definition->getClass());
        $this->assertSame('knp_menu.factory', (string) $definition->getArgument(0));

        $conditionals = $definition->getInstanceofConditionals();

        $this->assertArrayHasKey(FrameworkAwareInterface::class, $conditionals);

        /** @var ChildDefinition $childDefinition */
        $childDefinition = $conditionals[FrameworkAwareInterface::class];

        $this->assertSame('setFramework', $childDefinition->getMethodCalls()[0][0]);

        $tags = $definition->getTags();

        $this->assertSame('setTokenStorage', $definition->getMethodCalls()[0][0]);

        $this->assertArrayHasKey('contao.picker_provider', $tags);
        $this->assertSame(96, $tags['contao.picker_provider'][0]['priority']);
    }
}
