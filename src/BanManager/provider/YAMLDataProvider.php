<?php

namespace BanManager\provider;

use BanManager\utils\Ban;
use pocketmine\Player;

class YAMLDataProvider implements DataProvider{
    private $dataFolder;

    public function __construct($dataFolder){
        $this->dataFolder = $dataFolder;
        if(!is_dir($this->dataFolder)){
            @mkdir($this->dataFolder);
        }
    }

    public function processPlayerLogin(Player $player){
        // TODO: Implement processPlayerLogin() method.
    }

    public function banPlayer(string $xuid, int $time = 0, string $reason = null){
        // TODO: Implement banPlayer() method.
    }

    public function banIP(string $ipAddress, int $time = 0, string $reason = null){
        // TODO: Implement banIP() method.
    }

    public function unbanPlayer(string $xuid){
        // TODO: Implement unbanPlayer() method.
    }

    public function unbanIP(string $ipAddress){
        // TODO: Implement unbanIP() method.
    }

    public function getPlayerBan(string $xuid) : Ban{
        // TODO: Implement isPlayerBanned() method.
    }

    public function getIPBan(string $ipAddress) : Ban{
        // TODO: Implement isIPBanned() method.
    }

    public function verifyPlayerLogin(Player $player) : Ban{
        // TODO: Implement verifyPlayerLogin() method.
    }

    public function mutePlayer(string $xuid, int $time = 0, string $reason = null){
        // TODO: Implement mutePlayer() method.
    }

    public function unmutePlayer(string $xuid){
        // TODO: Implement unmutePlayer() method.
    }

    public function getPlayerMuteBan(string $xuid) : Ban{
        // TODO: Implement isPlayerMuted() method.
    }

    public function blockPlayer(string $xuid, int $time = 0, string $reason = null) : int{
        // TODO: Implement blockPlayer() method.
    }

    public function blockIP(string $ipAddress, int $time = 0, string $reason = null) : int{
        // TODO: Implement blockIP() method.
    }

    public function close(){

    }
}