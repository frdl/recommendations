<?php

namespace Webfan\Webfat\Module;

use Webfan\Webfat\Intent\IntentInterface;
use Webfan\Webfat\Module as BaseModule;
use Webfan\Webfat\Module\ModuleInterface;

class AuthModule extends BaseModule implements IntentInterface
{
  protected $name = 'auth';
}
