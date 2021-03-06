<?php

namespace BanManager\event;

use BanManager\utils\Ban;
use pocketmine\event\Cancellable;
use pocketmine\event\player\PlayerEvent;
use pocketmine\Player;

class PlayerLoginFailedEvent extends PlayerEvent implements Cancellable{
    public static $handlerList = null;

    /** @var Ban */
    protected $ban;

    public function __construct(Player $player, Ban $ban){
        $this->player = $player;
        $this->ban = $ban;
    }

    public function getBan() : Ban{
        return $this->ban;
    }
}