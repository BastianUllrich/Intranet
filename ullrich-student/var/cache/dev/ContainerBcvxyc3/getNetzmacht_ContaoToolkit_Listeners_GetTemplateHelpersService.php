<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'netzmacht.contao_toolkit.listeners.get_template_helpers' shared service.

return $this->services['netzmacht.contao_toolkit.listeners.get_template_helpers'] = new \Netzmacht\Contao\Toolkit\View\Template\Subscriber\GetTemplateHelpersListener((new \Netzmacht\Contao\Toolkit\View\Assets\GlobalsAssetsManagerFactory(true))->create(), ${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'});
