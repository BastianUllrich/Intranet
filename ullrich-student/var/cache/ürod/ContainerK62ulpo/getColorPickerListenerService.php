<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'Netzmacht\Contao\Toolkit\Dca\Listener\Wizard\ColorPickerListener' shared service.

return $this->services['Netzmacht\\Contao\\Toolkit\\Dca\\Listener\\Wizard\\ColorPickerListener'] = new \Netzmacht\Contao\Toolkit\Dca\Listener\Wizard\ColorPickerListener(${($_ = isset($this->services['templating']) ? $this->services['templating'] : $this->load('getTemplatingService.php')) && false ?: '_'}, ${($_ = isset($this->services['netzmacht.contao_toolkit.translation.translator']) ? $this->services['netzmacht.contao_toolkit.translation.translator'] : $this->getNetzmacht_ContaoToolkit_Translation_TranslatorService()) && false ?: '_'}, ${($_ = isset($this->services['netzmacht.contao_toolkit.dca.manager']) ? $this->services['netzmacht.contao_toolkit.dca.manager'] : $this->load('getNetzmacht_ContaoToolkit_Dca_ManagerService.php')) && false ?: '_'});
