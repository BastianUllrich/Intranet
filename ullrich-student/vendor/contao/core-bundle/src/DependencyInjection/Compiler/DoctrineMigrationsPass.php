<?php

/*
 * This file is part of Contao.
 *
 * (c) Leo Feyer
 *
 * @license LGPL-3.0-or-later
 */

namespace Contao\CoreBundle\DependencyInjection\Compiler;

use Contao\CoreBundle\Command\DoctrineMigrationsDiffCommand;
use Contao\CoreBundle\Doctrine\Schema\MigrationsSchemaProvider;
use Doctrine\Bundle\MigrationsBundle\DoctrineMigrationsBundle;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Definition;
use Symfony\Component\DependencyInjection\Reference;

/**
 * @author Andreas Schempp <https://github.com/aschempp>
 */
class DoctrineMigrationsPass implements CompilerPassInterface
{
    const DIFF_COMMAND_ID = 'console.command.contao_corebundle_command_doctrinemigrationsdiffcommand';

    /**
     * {@inheritdoc}
     */
    public function process(ContainerBuilder $container)
    {
        if (!$this->hasMigrationsBundle($container)) {
            return;
        }

        $provider = new Definition(MigrationsSchemaProvider::class);
        $provider->addArgument(new Reference('contao.framework'));
        $provider->addArgument(new Reference('doctrine'));

        $command = new Definition(DoctrineMigrationsDiffCommand::class);
        $command->setArguments([$provider]);
        $command->addTag('console.command');

        $container->setDefinition(DoctrineMigrationsDiffCommand::COMMAND_ID, $command);

        // Required if Symfony's compiler pass has already handled the "console.command" tags
        if ($container->hasParameter('console.command.ids')) {
            $ids = $container->getParameter('console.command.ids');
            $ids[] = static::DIFF_COMMAND_ID;

            $container->setParameter('console.command.ids', $ids);
        }
    }

    /**
     * Checks if the Doctrine migrations bundle is enabled.
     *
     * @param ContainerBuilder $container
     *
     * @return bool
     */
    private function hasMigrationsBundle(ContainerBuilder $container)
    {
        return \in_array(DoctrineMigrationsBundle::class, $container->getParameter('kernel.bundles'), true);
    }
}
