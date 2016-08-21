<?php

namespace mobtrap;

use pocketmine\Server
use pocketmine\plugin\PluginBase

class: 
  
      public function onEnable(){
        $this->getLogger()->info("mobtrap is now Enabled!");
    }
    
    
    public function onDisable(){
        $this->getLogger()->info("mobtrap is now Disabled!");
    }
}
