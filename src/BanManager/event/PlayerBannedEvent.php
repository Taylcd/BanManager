<?php

namespace BanManager\event;

use BanManager\utils\Ban;

class PlayerBannedEvent extends BannedEvent{
    public function __construct(Ban $ban){
        parent::__construct($ban);
    }
}