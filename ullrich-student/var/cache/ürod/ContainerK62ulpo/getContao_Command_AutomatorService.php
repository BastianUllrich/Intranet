<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'contao.command.automator' shared service.

$this->services['contao.command.automator'] = $instance = new \Contao\CoreBundle\Command\AutomatorCommand();

$instance->setFramework(${($_ = isset($this->services['contao.framework']) ? $this->services['contao.framework'] : $this->getContao_FrameworkService()) && false ?: '_'});

return $instance;
