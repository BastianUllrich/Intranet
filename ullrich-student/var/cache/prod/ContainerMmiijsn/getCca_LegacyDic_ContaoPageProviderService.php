<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'cca.legacy_dic.contao_page_provider' shared service.

@trigger_error('The "cca.legacy_dic.contao_page_provider" service is deprecated. You should stop using it, as it will soon be removed.', E_USER_DEPRECATED);

return $this->services['cca.legacy_dic.contao_page_provider'] = ${($_ = isset($this->services['DependencyInjection\\Container\\ContaoServices\\ServiceFactory']) ? $this->services['DependencyInjection\\Container\\ContaoServices\\ServiceFactory'] : ($this->services['DependencyInjection\\Container\\ContaoServices\\ServiceFactory'] = new \DependencyInjection\Container\ContaoServices\ServiceFactory($this))) && false ?: '_'}->createPageProviderService();
