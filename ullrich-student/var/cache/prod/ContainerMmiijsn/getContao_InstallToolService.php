<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'contao.install_tool' shared service.

return $this->services['contao.install_tool'] = new \Contao\InstallationBundle\InstallTool(${($_ = isset($this->services['doctrine.dbal.default_connection']) ? $this->services['doctrine.dbal.default_connection'] : $this->getDoctrine_Dbal_DefaultConnectionService()) && false ?: '_'}, $this->targetDirs[3], ${($_ = isset($this->services['logger']) ? $this->services['logger'] : $this->load('getLoggerService.php')) && false ?: '_'});
