<?php

namespace Webfan\Webfat\Module;

use Psr\Container\ContainerInterface;

interface ModuleInterface
{
   public function getName() : string;
  /*  
   public function getId() : string;
   public function getUUID() : ?string;
   public function build(ContainerInterface $ContainerBuilder);
   public function enabled(?bool $enable = null) : bool;
  
   public function configure();
   public function activate();
   public function deactivate();
   public function install();
   public function uninstall();
   public function configure();
  */
}
