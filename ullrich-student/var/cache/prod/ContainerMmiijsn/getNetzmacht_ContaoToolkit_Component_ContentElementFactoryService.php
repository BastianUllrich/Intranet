<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'netzmacht.contao_toolkit.component.content_element_factory' shared service.

return $this->services['netzmacht.contao_toolkit.component.content_element_factory'] = new \Netzmacht\Contao\Toolkit\Component\ToolkitComponentFactory([0 => ${($_ = isset($this->services['ContaoBootstrap\\Grid\\Component\\ContentElement\\GridElementFactory']) ? $this->services['ContaoBootstrap\\Grid\\Component\\ContentElement\\GridElementFactory'] : $this->load('getGridElementFactoryService.php')) && false ?: '_'}, 1 => ${($_ = isset($this->services['ContaoBootstrap\\Grid\\Component\\ContentElement\\GalleryFactory']) ? $this->services['ContaoBootstrap\\Grid\\Component\\ContentElement\\GalleryFactory'] : $this->load('getGalleryFactoryService.php')) && false ?: '_'}]);
