<?php

namespace Webfan\Webfat;

use Webfan\Webfat\Module\ModuleInterface;
use Psr\Container\ContainerInterface;

use Webfan\Webfat\App\AbstractContainerBuilder;

# use Webfan\Webfat\Intent\IntentInterface;

use Webfan\Webfat\App\GenericModuleCoreSetup;

abstract class Module implements ModuleInterface
{
   use \Webfan\withClassCastingTrait,
	\Webfan\Webfat\withKernelTrait,
	\Webfan\ngModuleTrait,
        \Webfan\configModuleTrait;	
   
	
 public function createSetup($setupModuleTraitLikeObjectOrArray){
		if(is_array($setupModuleTraitLikeObjectOrArray) && !isset($setupModuleTraitLikeObjectOrArray['moduleClassName']) ){
			$setupModuleTraitLikeObjectOrArray['moduleClassName'] = \get_class($this);
		}elseif(is_object($setupModuleTraitLikeObjectOrArray) 
				&& $setupModuleTraitLikeObjectOrArray instanceof \stdclass
				&& !isset($setupModuleTraitLikeObjectOrArray->moduleClassName) 
			   ){
			$setupModuleTraitLikeObjectOrArray->moduleClassName = \get_class($this);
		}else{
			$setupModuleTraitLikeObjectOrArray = \Webfan\Script::create($setupModuleTraitLikeObjectOrArray);
			$setupModuleTraitLikeObjectOrArray->prototype = \Webfan\Script::create([
                           'moduleClassName' => \get_class($this),
			]);
			$setupModuleTraitLikeObjectOrArray = $setupModuleTraitLikeObjectOrArray();
		}
   return $this->classCasting($this->classCasting(GenericModuleCoreSetup::class, $setupModuleTraitLikeObjectOrArray), $this);
 }
   

	
   public function getName():string
   {
      return $this->name; 
   }
}
