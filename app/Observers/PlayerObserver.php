<?php
namespace App\Observers;

use Hashids;
use App\Models\Player;

class PlayerObserver
{
    public function created(Player $player)
    {
        $player->hashed_id = Hashids::encode($player->id);
        $player->save();

    }
}
