<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.authentication.provider.simple_preauth.backend' shared service.

return $this->services['security.authentication.provider.simple_preauth.backend'] = new \Symfony\Component\Security\Core\Authentication\Provider\SimpleAuthenticationProvider(${($_ = isset($this->services['contao.security.authenticator']) ? $this->services['contao.security.authenticator'] : $this->load('getContao_Security_AuthenticatorService.php')) && false ?: '_'}, ${($_ = isset($this->services['contao.security.user_provider']) ? $this->services['contao.security.user_provider'] : $this->load('getContao_Security_UserProviderService.php')) && false ?: '_'}, 'backend', ${($_ = isset($this->services['security.user_checker']) ? $this->services['security.user_checker'] : ($this->services['security.user_checker'] = new \Symfony\Component\Security\Core\User\UserChecker())) && false ?: '_'});
