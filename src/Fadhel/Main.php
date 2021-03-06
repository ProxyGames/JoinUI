<?php

namespace Fadhel;

use pocketmine\Server;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\utils\TextFormat as C;

class Main extends PluginBase implements Listener{
	
	public function onEnable(){
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
		$this->getLogger()->Info(C::GREEN. "Enabled!");
		}
		
	public function onJoin(PlayerJoinEvent $event){
		$player = $event->getPlayer();
    $this->openMyForm($player);
		}
    public function openMyForm($player){ 
        $api = $this->getServer()->getPluginManager()->getPlugin("FormAPI");
        $form = $api->createSimpleForm(function (Player $player, int $data = null){
            $result = $data;
            if($result === null){
                return true;
            }             
            switch($result){
                case 0:
                break;
            }
            
            
            });
            $form->setTitle("§b§lWelcome!");
            $form->setContent("§e Thanks for playing on our §bServer§e!");
            $form->addButton("Exit");
            $form->sendToPlayer($player);                  
            return $form;                                            
				}
	}
