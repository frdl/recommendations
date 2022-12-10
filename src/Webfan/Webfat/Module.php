<?php

namespace Webfan\Webfat;

use Webfan\Webfat\Module\ModuleInterface;
use Psr\Container\ContainerInterface;

use Webfan\Webfat\App\AbstractContainerBuilder;

abstract class Module implements ModuleInterface
{
   use \Webfan\ngModuleTrait;
   
   public function _niy($method)
   {
       throw new \Exception(sprintf('You mus implement and overwrite the method %1$s in the class %2$s!', $method, get_class($this)));
   }
   

	
   public function getName():string
   {
      return $this->name; 
   }
}
