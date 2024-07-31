<?php

namespace Iroid\LocalTimezone;

use Illuminate\Support\ServiceProvider;

class LocalTimezoneServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/Http/routes.php');
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'localtimezone');
    }

    public function register()
    {
        // Register any bindings or singletons
    }
}
