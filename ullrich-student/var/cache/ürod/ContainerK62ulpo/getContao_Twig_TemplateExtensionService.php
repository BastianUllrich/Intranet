<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'contao.twig.template_extension' shared service.

return $this->services['contao.twig.template_extension'] = new \Contao\CoreBundle\Twig\Extension\ContaoTemplateExtension(${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())) && false ?: '_'}, ${($_ = isset($this->services['contao.framework']) ? $this->services['contao.framework'] : $this->getContao_FrameworkService()) && false ?: '_'}, ${($_ = isset($this->services['contao.routing.scope_matcher']) ? $this->services['contao.routing.scope_matcher'] : $this->getContao_Routing_ScopeMatcherService()) && false ?: '_'});
