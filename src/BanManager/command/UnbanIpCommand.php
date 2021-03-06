<?php

namespace BanManager\command;

use BanManager\BanManager;
use BanManager\utils\Time;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\command\utils\InvalidCommandSyntaxException;

class UnbanIpCommand extends Command{
    /** @var BanManager */
    private $plugin;

    public function __construct(BanManager $plugin){
        parent::__construct(
            $plugin->getConfig()->getNested("commands.unban-ip"),
            $plugin->getMessage("description.unbanIp"),
            $plugin->getMessage("usage.unbanIp")
        );
        $this->setPermission("banmanager.command.unban.ip");
        $this->plugin = $plugin;
    }

    public function execute(CommandSender $sender, string $commandLabel, array $args){
        if(!$this->testPermission($sender)){
            return true;
        }

        if(count($args) === 0){
            throw new InvalidCommandSyntaxException();
        }

        $ip = array_shift($args);
        $time = array_shift($args) ?? 0;
        $reason = implode(" ", $args);
        if((filter_var($ip, FILTER_VALIDATE_IP) === false)){
            $sender->sendMessage($this->plugin->getMessage("command.ipNotValid"));
        } else {
            $this->plugin->getDataProvider()->unbanIP($ip);
            $sender->sendMessage($this->plugin->getMessage("command.ipUnbanned", $ip));
        }
        return true;
    }
}