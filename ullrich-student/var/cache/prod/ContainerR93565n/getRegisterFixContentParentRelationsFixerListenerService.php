<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'ContaoBootstrap\Grid\Listener\Hook\RegisterFixContentParentRelationsFixerListener' shared service.

return $this->services['ContaoBootstrap\\Grid\\Listener\\Hook\\RegisterFixContentParentRelationsFixerListener'] = new \ContaoBootstrap\Grid\Listener\Hook\RegisterFixContentParentRelationsFixerListener(${($_ = isset($this->services['netzmacht.contao_toolkit.dca.manager']) ? $this->services['netzmacht.contao_toolkit.dca.manager'] : $this->load('getNetzmacht_ContaoToolkit_Dca_ManagerService.php')) && false ?: '_'}, $this->parameters['contao_bootstrap.grid.content_parent_drivers']);
