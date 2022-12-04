<?php

namespace Webfan\Webfat;

use Webfan\Webfat\Module\ModuleInterface;

abstract class Module implements ModuleInterface
{
   use Webfan\ngModuleTrait;
   
   public function getName():string
   {
      return $this->name; 
   }
}
