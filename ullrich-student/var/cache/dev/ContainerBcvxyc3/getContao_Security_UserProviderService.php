<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'contao.security.user_provider' shared service.

$this->services['contao.security.user_provider'] = $instance = new \Contao\CoreBundle\Security\User\ContaoUserProvider(${($_ = isset($this->services['contao.framework']) ? $this->services['contao.framework'] : $this->getContao_FrameworkService()) && false ?: '_'}, ${($_ = isset($this->services['contao.routing.scope_matcher']) ? $this->services['contao.routing.scope_matcher'] : $this->getContao_Routing_ScopeMatcherService()) && false ?: '_'});

$instance->setContainer($this);

return $instance;
