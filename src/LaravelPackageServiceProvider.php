<?php

namespace smileraj\laravelpackage;

use Illuminate\Auth\Events\Logout;
use Illuminate\Session\SessionManager;
use Illuminate\Support\ServiceProvider;

class LaravelPackageServiceProvider extends ServiceProvider
{

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('package', 'smileraj\laravelpackage\package');

        $config = __DIR__ . '/../config/package.php';
        $this->mergeConfigFrom($config, 'package');

        $this->publishes([__DIR__ . '/../config/package.php' => config_path('package.php')], 'config');

    
       
    }
}
