<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'contao.listener.add_to_search_index' shared service.

return $this->services['contao.listener.add_to_search_index'] = new \Contao\CoreBundle\EventListener\AddToSearchIndexListener(${($_ = isset($this->services['contao.framework']) ? $this->services['contao.framework'] : $this->getContao_FrameworkService()) && false ?: '_'}, '/_fragment');
