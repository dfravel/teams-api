<?php
namespace App\Observers;

use Hashids;
use App\Models\Team;

class TeamObserver
{
    public function created(Team $team)
    {
        $team->hashed_id = Hashids::encode($team->id);
        $team->api_token = str_random(60);
        $team->save();

    }
}
