<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'cca.legacy_dic.contao_session' shared service.

@trigger_error('The "cca.legacy_dic.contao_session" service is deprecated. Use the session service instead', E_USER_DEPRECATED);

return $this->services['cca.legacy_dic.contao_session'] = ${($_ = isset($this->services['DependencyInjection\\Container\\ContaoServices\\ServiceFactory']) ? $this->services['DependencyInjection\\Container\\ContaoServices\\ServiceFactory'] : ($this->services['DependencyInjection\\Container\\ContaoServices\\ServiceFactory'] = new \DependencyInjection\Container\ContaoServices\ServiceFactory($this))) && false ?: '_'}->createSessionService();
