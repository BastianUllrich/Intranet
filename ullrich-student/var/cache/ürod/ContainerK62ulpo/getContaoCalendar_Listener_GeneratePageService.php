<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'contao_calendar.listener.generate_page' shared service.

return $this->services['contao_calendar.listener.generate_page'] = new \Contao\CalendarBundle\EventListener\GeneratePageListener(${($_ = isset($this->services['contao.framework']) ? $this->services['contao.framework'] : $this->getContao_FrameworkService()) && false ?: '_'});
