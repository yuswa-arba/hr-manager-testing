<?php

namespace GlobalXtreme\HRManager;

use Illuminate\Support\ServiceProvider;

class HRServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/hr-manager.php' => config_path('hr-manager.php'),
        ],'hr-manager-config');
    }

    public function register()
    {
        //
    }
}
