<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'cache.system_clearer' shared service.

return $this->services['cache.system_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer(['cache.system' => ${($_ = isset($this->services['cache.system']) ? $this->services['cache.system'] : $this->load('getCache_SystemService.php')) && false ?: '_'}, 'cache.annotations' => ${($_ = isset($this->services['cache.annotations']) ? $this->services['cache.annotations'] : $this->load('getCache_AnnotationsService.php')) && false ?: '_'}]);
