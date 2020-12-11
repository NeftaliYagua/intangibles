<?php

namespace LaravelSchema\Intangibles;

use Illuminate\Support\ServiceProvider;

class IntangiblesServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/intangibles.php' => config_path('intangibles.php'),
        ]);
    }
    public function register()
    {
        
    }
}