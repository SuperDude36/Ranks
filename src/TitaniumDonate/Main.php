<?php

namespace TitaniumDonate;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\utils\TextFormat;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\command\CommandExecutor;

class Main extends PluginBase implements Listener{
	
	public function onEnable(){
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
		$this->getLogger()->info(TextFormat::BLUE."Enabled!");
		$this->getLogger()->info(TextFormat::GREEN."Created By Bulk!");
	}
	
	public function onDisable(){
		$this->getLogger()->info(TextFormat::RED."Disabled!");
	}
	
public function onCommand(CommandSender $sender, Command $command, $label, array $args) {
			if(strtolower($command->getName('ranks'))) {
					$sender->sendMessage(TextFormat::RED."§6§l-----------------------------------------§r");
					$sender->sendMessage(TextFormat::GOLD."§6§l         Ranks on Heroic§ePrisons:§r       ");
					$sender->sendMessage(TextFormat::BLUE."§eA: 50000");
					$sender->sendMessage(TextFormat::BLUE."§eB: 60000");
					$sender->sendMessage(TextFormat::BLUE."§eC: 100000");
					$sender->sendMessage(TextFormat::BLUE."§eD: 400000");
					$sender->sendMessage(TextFormat::BLUE."§eE: 800000");
					$sender->sendMessage(TextFormat::BLUE."§eF: 1600000");
					$sender->sendMessage(TextFormat::BLUE."§eG: 3200000");
					$sender->sendMessage(TextFormat::BLUE."§eH: 4000000");
					$sender->sendMessage(TextFormat::BLUE."§eI: 6000000");
					$sender->sendMessage(TextFormat::BLUE."§eJ: 15000000");
					$sender->sendMessage(TextFormat::BLUE."§eK: 20000000");
					$sender->sendMessage(TextFormat::BLUE."§eL: 35000000");
					$sender->sendMessage(TextFormat::BLUE."§eM: 40000000");
					$sender->sendMessage(TextFormat::BLUE."§eN: 54000000");
					$sender->sendMessage(TextFormat::BLUE."§eO: 64000000");
					$sender->sendMessage(TextFormat::BLUE."§eP: 70000000");
					$sender->sendMessage(TextFormat::BLUE."§eQ:");
					$sender->sendMessage(TextFormat::BLUE."§eR:");
					$sender->sendMessage(TextFormat::BLUE."§eS:");
					$sender->sendMessage(TextFormat::BLUE."§eT:");
					$sender->sendMessage(TextFormat::BLUE."§eU:");
					$sender->sendMessage(TextFormat::BLUE."§eV:");
					$sender->sendMessage(TextFormat::BLUE."§eW:");
					$sender->sendMessage(TextFormat::BLUE."§eX:");
					$sender->sendMessage(TextFormat::BLUE."§eY:");
					$sender->sendMessage(TextFormat::BLUE."§eZ:");
					$sender->sendMessage(TextFormat::RED."§6§l-----------------------------------------§r");
          return true;
          }
          }
          }
