<?php

namespace Laravelhelper\LaravelIideHelper;

use Illuminate\Support\ServiceProvider;

class LaravelIideHelperServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/routes.php');
        $this->loadViewsFrom(__DIR__.'/views', 'laravel-iide-helper');
    }
}
