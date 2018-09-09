<?php

namespace App\Providers;

use App\Models\User;
use App\Observers\UserObserver;

use App\Models\Team;
use App\Observers\TeamObserver;

use App\Models\Player;
use App\Observers\PlayerObserver;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        User::observe(UserObserver::class);
        Team::observe(TeamObserver::class);
        Player::observe(PlayerObserver::class);

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
