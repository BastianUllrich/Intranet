<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'terminal42_folderpage.listener.system_messages' shared service.

return $this->services['terminal42_folderpage.listener.system_messages'] = new \Terminal42\FolderpageBundle\EventListener\SystemMessagesListener(${($_ = isset($this->services['terminal42_folderpage.datacontainer.page']) ? $this->services['terminal42_folderpage.datacontainer.page'] : $this->load('getTerminal42Folderpage_Datacontainer_PageService.php')) && false ?: '_'});
