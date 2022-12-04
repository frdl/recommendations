<?php

namespace Webfan\Webfat;

use Webfan\Webfat\Module\ModuleInterface;

abstract class Module implements ModuleInterface
{
   use \Webfan\ngModuleTrait, \Nette\SmartObject;
   
   public function getName():string
   {
      return $this->name; 
   }
}
