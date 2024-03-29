<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'console.command_loader' shared service.

return $this->services['console.command_loader'] = new \Symfony\Component\Console\CommandLoader\ContainerCommandLoader(new \Symfony\Component\DependencyInjection\ServiceLocator(['console.command.about' => function () {
    $f = function (\Symfony\Bundle\FrameworkBundle\Command\AboutCommand $v) { return $v; }; return $f(${($_ = isset($this->services['console.command.about']) ? $this->services['console.command.about'] : $this->load('getConsole_Command_AboutService.php')) && false ?: '_'});
}, 'console.command.assets_install' => function () {
    $f = function (\Symfony\Bundle\FrameworkBundle\Command\AssetsInstallCommand $v) { return $v; }; return $f(${($_ = isset($this->services['console.command.assets_install']) ? $this->services['console.command.assets_install'] : $this->load('getConsole_Command_AssetsInstallService.php')) && false ?: '_'});
}, 'console.command.cache_clear' => function () {
    $f = function (\Symfony\Bundle\FrameworkBundle\Command\CacheClearCommand $v) { return $v; }; return $f(${($_ = isset($this->services['console.command.cache_clear']) ? $this->services['console.command.cache_clear'] : $this->load('getConsole_Command_CacheClearService.php')) && false ?: '_'});
}, 'console.command.cache_pool_clear' => function () {
    $f = function (\Symfony\Bundle\FrameworkBundle\Command\CachePoolClearCommand $v) { return $v; }; return $f(${($_ = isset($this->services['console.command.cache_pool_clear']) ? $this->services['console.command.cache_pool_clear'] : $this->load('getConsole_Command_CachePoolClearService.php')) && false ?: '_'});
}, 'console.command.cache_pool_prune' => function () {
    $f = function (\Symfony\Bundle\FrameworkBundle\Command\CachePoolPruneCommand $v) { return $v; }; return $f(${($_ = isset($this->services['console.command.cache_pool_prune']) ? $this->services['console.command.cache_pool_prune'] : $this->load('getConsole_Command_CachePoolPruneService.php')) && false ?: '_'});
}, 'console.command.cache_warmup' => function () {
    $f = function (\Symfony\Bundle\FrameworkBundle\Command\CacheWarmupCommand $v) { return $v; }; return $f(${($_ = isset($this->services['console.command.cache_warmup']) ? $this->services['console.command.cache_warmup'] : $this->load('getConsole_Command_CacheWarmupService.php')) && false ?: '_'});
}, 'console.command.config_debug' => function () {
    $f = function (\Symfony\Bundle\FrameworkBundle\Command\ConfigDebugCommand $v) { return $v; }; return $f(${($_ = isset($this->services['console.command.config_debug']) ? $this->services['console.command.config_debug'] : $this->load('getConsole_Command_ConfigDebugService.php')) && false ?: '_'});
}, 'console.command.config_dump_reference' => function () {
    $f = function (\Symfony\Bundle\FrameworkBundle\Command\ConfigDumpReferenceCommand $v) { return $v; }; return $f(${($_ = isset($this->services['console.command.config_dump_reference']) ? $this->services['console.command.config_dump_reference'] : $this->load('getConsole_Command_ConfigDumpReferenceService.php')) && false ?: '_'});
}, 'console.command.container_debug' => function () {
    $f = function (\Symfony\Bundle\FrameworkBundle\Command\ContainerDebugCommand $v) { return $v; }; return $f(${($_ = isset($this->services['console.command.container_debug']) ? $this->services['console.command.container_debug'] : $this->load('getConsole_Command_ContainerDebugService.php')) && false ?: '_'});
}, 'console.command.debug_autowiring' => function () {
    $f = function (\Symfony\Bundle\FrameworkBundle\Command\DebugAutowiringCommand $v) { return $v; }; return $f(${($_ = isset($this->services['console.command.debug_autowiring']) ? $this->services['console.command.debug_autowiring'] : $this->load('getConsole_Command_DebugAutowiringService.php')) && false ?: '_'});
}, 'console.command.event_dispatcher_debug' => function () {
    $f = function (\Symfony\Bundle\FrameworkBundle\Command\EventDispatcherDebugCommand $v) { return $v; }; return $f(${($_ = isset($this->services['console.command.event_dispatcher_debug']) ? $this->services['console.command.event_dispatcher_debug'] : $this->load('getConsole_Command_EventDispatcherDebugService.php')) && false ?: '_'});
}, 'console.command.router_debug' => function () {
    $f = function (\Symfony\Bundle\FrameworkBundle\Command\RouterDebugCommand $v) { return $v; }; return $f(${($_ = isset($this->services['console.command.router_debug']) ? $this->services['console.command.router_debug'] : $this->load('getConsole_Command_RouterDebugService.php')) && false ?: '_'});
}, 'console.command.router_match' => function () {
    $f = function (\Symfony\Bundle\FrameworkBundle\Command\RouterMatchCommand $v) { return $v; }; return $f(${($_ = isset($this->services['console.command.router_match']) ? $this->services['console.command.router_match'] : $this->load('getConsole_Command_RouterMatchService.php')) && false ?: '_'});
}, 'console.command.translation_debug' => function () {
    $f = function (\Symfony\Bundle\FrameworkBundle\Command\TranslationDebugCommand $v) { return $v; }; return $f(${($_ = isset($this->services['console.command.translation_debug']) ? $this->services['console.command.translation_debug'] : $this->load('getConsole_Command_TranslationDebugService.php')) && false ?: '_'});
}, 'console.command.translation_update' => function () {
    $f = function (\Symfony\Bundle\FrameworkBundle\Command\TranslationUpdateCommand $v) { return $v; }; return $f(${($_ = isset($this->services['console.command.translation_update']) ? $this->services['console.command.translation_update'] : $this->load('getConsole_Command_TranslationUpdateService.php')) && false ?: '_'});
}, 'console.command.xliff_lint' => function () {
    $f = function (\Symfony\Bundle\FrameworkBundle\Command\XliffLintCommand $v) { return $v; }; return $f(${($_ = isset($this->services['console.command.xliff_lint']) ? $this->services['console.command.xliff_lint'] : $this->load('getConsole_Command_XliffLintService.php')) && false ?: '_'});
}, 'console.command.yaml_lint' => function () {
    $f = function (\Symfony\Bundle\FrameworkBundle\Command\YamlLintCommand $v) { return $v; }; return $f(${($_ = isset($this->services['console.command.yaml_lint']) ? $this->services['console.command.yaml_lint'] : $this->load('getConsole_Command_YamlLintService.php')) && false ?: '_'});
}, 'doctrine.database_create_command' => function () {
    $f = function (\Doctrine\Bundle\DoctrineBundle\Command\CreateDatabaseDoctrineCommand $v) { return $v; }; return $f(${($_ = isset($this->services['doctrine.database_create_command']) ? $this->services['doctrine.database_create_command'] : $this->load('getDoctrine_DatabaseCreateCommandService.php')) && false ?: '_'});
}, 'doctrine.database_drop_command' => function () {
    $f = function (\Doctrine\Bundle\DoctrineBundle\Command\DropDatabaseDoctrineCommand $v) { return $v; }; return $f(${($_ = isset($this->services['doctrine.database_drop_command']) ? $this->services['doctrine.database_drop_command'] : $this->load('getDoctrine_DatabaseDropCommandService.php')) && false ?: '_'});
}, 'doctrine.generate_entities_command' => function () {
    $f = function (\Doctrine\Bundle\DoctrineBundle\Command\GenerateEntitiesDoctrineCommand $v) { return $v; }; return $f(${($_ = isset($this->services['doctrine.generate_entities_command']) ? $this->services['doctrine.generate_entities_command'] : $this->load('getDoctrine_GenerateEntitiesCommandService.php')) && false ?: '_'});
}, 'doctrine.query_sql_command' => function () {
    $f = function (\Doctrine\Bundle\DoctrineBundle\Command\Proxy\RunSqlDoctrineCommand $v) { return $v; }; return $f(${($_ = isset($this->services['doctrine.query_sql_command']) ? $this->services['doctrine.query_sql_command'] : $this->load('getDoctrine_QuerySqlCommandService.php')) && false ?: '_'});
}, 'security.command.user_password_encoder' => function () {
    $f = function (\Symfony\Bundle\SecurityBundle\Command\UserPasswordEncoderCommand $v) { return $v; }; return $f(${($_ = isset($this->services['security.command.user_password_encoder']) ? $this->services['security.command.user_password_encoder'] : $this->load('getSecurity_Command_UserPasswordEncoderService.php')) && false ?: '_'});
}, 'sensio_distribution.security_checker.command' => function () {
    $f = function (\SensioLabs\Security\Command\SecurityCheckerCommand $v) { return $v; }; return $f(${($_ = isset($this->services['sensio_distribution.security_checker.command']) ? $this->services['sensio_distribution.security_checker.command'] : $this->load('getSensioDistribution_SecurityChecker_CommandService.php')) && false ?: '_'});
}, 'twig.command.debug' => function () {
    $f = function (\Symfony\Bridge\Twig\Command\DebugCommand $v) { return $v; }; return $f(${($_ = isset($this->services['twig.command.debug']) ? $this->services['twig.command.debug'] : $this->load('getTwig_Command_DebugService.php')) && false ?: '_'});
}, 'twig.command.lint' => function () {
    $f = function (\Symfony\Bundle\TwigBundle\Command\LintCommand $v) { return $v; }; return $f(${($_ = isset($this->services['twig.command.lint']) ? $this->services['twig.command.lint'] : $this->load('getTwig_Command_LintService.php')) && false ?: '_'});
}]), ['about' => 'console.command.about', 'assets:install' => 'console.command.assets_install', 'cache:clear' => 'console.command.cache_clear', 'cache:pool:clear' => 'console.command.cache_pool_clear', 'cache:pool:prune' => 'console.command.cache_pool_prune', 'cache:warmup' => 'console.command.cache_warmup', 'debug:config' => 'console.command.config_debug', 'config:dump-reference' => 'console.command.config_dump_reference', 'debug:container' => 'console.command.container_debug', 'debug:autowiring' => 'console.command.debug_autowiring', 'debug:event-dispatcher' => 'console.command.event_dispatcher_debug', 'debug:router' => 'console.command.router_debug', 'router:match' => 'console.command.router_match', 'debug:translation' => 'console.command.translation_debug', 'translation:update' => 'console.command.translation_update', 'lint:xliff' => 'console.command.xliff_lint', 'lint:yaml' => 'console.command.yaml_lint', 'security:encode-password' => 'security.command.user_password_encoder', 'debug:twig' => 'twig.command.debug', 'lint:twig' => 'twig.command.lint', 'doctrine:database:create' => 'doctrine.database_create_command', 'doctrine:database:drop' => 'doctrine.database_drop_command', 'doctrine:generate:entities' => 'doctrine.generate_entities_command', 'doctrine:query:sql' => 'doctrine.query_sql_command', 'security:check' => 'sensio_distribution.security_checker.command']);
