<?php

namespace Laurel\Cleaner\App\Providers;

use Illuminate\Support\ServiceProvider;

class CleanerServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../../config/cleaner.php', 'laurel.cleaner'
        );
        $this->publishes([
            __DIR__ . '/../../config/cleaner.php' => config_path('laurel/cleaner.php')
        ], 'config');
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
