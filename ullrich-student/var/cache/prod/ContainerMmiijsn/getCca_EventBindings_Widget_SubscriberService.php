<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'cca.event_bindings.widget.subscriber' shared service.

return $this->services['cca.event_bindings.widget.subscriber'] = new \ContaoCommunityAlliance\Contao\Bindings\Subscribers\WidgetSubscriber(${($_ = isset($this->services['contao.framework']) ? $this->services['contao.framework'] : $this->getContao_FrameworkService()) && false ?: '_'});
