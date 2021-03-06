<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'knp_menu.renderer_provider' shared service.

return $this->services['knp_menu.renderer_provider'] = new \Knp\Menu\Renderer\PsrProvider(new \Symfony\Component\DependencyInjection\ServiceLocator(['list' => function () {
    return ${($_ = isset($this->services['knp_menu.renderer.list']) ? $this->services['knp_menu.renderer.list'] : $this->load('getKnpMenu_Renderer_ListService.php')) && false ?: '_'};
}, 'twig' => function () {
    return ${($_ = isset($this->services['knp_menu.renderer.twig']) ? $this->services['knp_menu.renderer.twig'] : $this->load('getKnpMenu_Renderer_TwigService.php')) && false ?: '_'};
}]), 'twig');
