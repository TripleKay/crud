<?php

namespace TripleKay\Crud;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class CrudServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {

    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->mergeConfigFrom(
            __DIR__.'/config/app.php','crud'
        );

        Route::prefix(config('crud.route.prefix'))
            ->group(function () {
                $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        });

        $this->loadViewsFrom(__DIR__.'/views','crud');

        $this->loadMigrationsFrom(__DIR__.'/database/migrations');

        $this->publishes([
            __DIR__.'/config/app.php' => config_path('crud.php'),
        ]);

    }
}
