<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'ivory_ck_editor.command.installer' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/console/Command/Command.php';
include_once $this->targetDirs[3].'/vendor/egeloen/ckeditor-bundle/Command/CKEditorInstallerCommand.php';
include_once $this->targetDirs[3].'/vendor/egeloen/ckeditor-bundle/Installer/CKEditorInstaller.php';

return $this->services['ivory_ck_editor.command.installer'] = new \Ivory\CKEditorBundle\Command\CKEditorInstallerCommand(${($_ = isset($this->services['ivory_ck_editor.installer']) ? $this->services['ivory_ck_editor.installer'] : $this->services['ivory_ck_editor.installer'] = new \Ivory\CKEditorBundle\Installer\CKEditorInstaller()) && false ?: '_'});
