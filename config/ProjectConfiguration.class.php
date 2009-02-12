<?php

require_once '/usr/share/php5/symfony-1.2/lib/autoload/sfCoreAutoload.class.php';
sfCoreAutoload::register();

class ProjectConfiguration extends sfProjectConfiguration
{
  public function setup()
  {
    //$this->enablePlugins(array('sfDoctrinePlugin', 'sfDoctrineGuardPlugin'));
    //$this->disablePlugins(array('sfPropelPlugin'));
    $this->enableAllPluginsExcept(array('sfPropelPlugin', 'sfProtoculousPlugin', 'sfCompat10Plugin')); /*esta función engloba a las 2 comentadas de arriba*/
  }
}
