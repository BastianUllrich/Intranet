<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'time.datetime_formatter' shared service.

return $this->services['time.datetime_formatter'] = new \Knp\Bundle\TimeBundle\DateTimeFormatter(${($_ = isset($this->services['netzmacht.contao_toolkit.translation.translator']) ? $this->services['netzmacht.contao_toolkit.translation.translator'] : $this->getNetzmacht_ContaoToolkit_Translation_TranslatorService()) && false ?: '_'});
