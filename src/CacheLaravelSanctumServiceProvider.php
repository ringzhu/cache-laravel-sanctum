<?php

namespace Packages\CacheLaravelSanctum;

use Illuminate\Support\ServiceProvider;
use Laravel\Sanctum\Sanctum;

class CacheLaravelSanctumServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Sanctum::usePersonalAccessTokenModel(PersonalAccessToken::class);
    }
}
