<?php

namespace Webfan\Webfat;

use Webfan\Webfat\Module\ModuleInterface;
use Psr\Container\ContainerInterface;

abstract class Module implements ModuleInterface
{
   use \Webfan\ngModuleTrait, 
   \Webfan\setupModuleTrait;
   
   public function _niy($method)
   {
       throw new \Exception(sprintf('You mus implement and overwrite the method %1$s in the class %2$s!', $method, get_class($this)));
   }
   
   public function install(array $args = [], string $section = null)
   {
      $this->_niy(__METHOD__);
   }
   
	public function uninstall(array $args = [], string $section = null)
   {
      $this->_niy(__METHOD__);
   }
   
	public function build(array $args = [], string $section = null)
   {
      $this->_niy(__METHOD__);
   }
   
	
   public function getContainer() : ?ContainerInterface
   {
      $this->_niy(__METHOD__);
   }
   
   public function getName():string
   {
      return $this->name; 
   }
}
