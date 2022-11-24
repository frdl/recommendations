<?php

namespace Webfan\Webfat;

use Webfan\Webfat\Module\ModuleInterface;

class Module implements ModuleInterface
{
   public function getName():string
   {
      return $this->name; 
   }
}
