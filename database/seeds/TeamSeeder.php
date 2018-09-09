<?php

use Illuminate\Database\Seeder;


use App\Models\Team;
use App\Models\User;
use App\Models\Player;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();
        DB::table('teams')->truncate();
        DB::table('players')->truncate();

        // making the executive decision that players belong to teams
        // we're creating 10 teams and each team will have 10 players
        factory(Team::class, 10)->create()->each(function ($team) {
            $team->players()->saveMany(factory(Player::class, 10)->make());
        });
        factory(User::class, 20)->create();
    }
}
