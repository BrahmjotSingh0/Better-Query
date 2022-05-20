<?php

namespace RealBJsingh\BetterQuery;

use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;
use pocketmine\event\Listener;
use pocketmine\Server;
use pocketmine\event\server\QueryRegenerateEvent;

class BetterQuery extends PluginBase implements Listener{

   public function onEnable() : void{
      $this->getServer()->getPluginManager()->registerEvents($this, $this);
   }
        
   public function onQueryRegenerate(QueryRegenerateEvent $event) : void{
      $queryInfo = $event->getQueryInfo();
      $currentPlayerCount = count(Server::getInstance()->getOnlinePlayers());
      $queryInfo->setMaxPlayerCount($currentPlayerCount + 1);
   }
   
}