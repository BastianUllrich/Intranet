<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'contao.command.install' shared service.

return $this->services['contao.command.install'] = new \Contao\CoreBundle\Command\InstallCommand($this->targetDirs[3], 'files', ($this->targetDirs[3].'/assets/images'));
