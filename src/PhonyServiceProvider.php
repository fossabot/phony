<?php

namespace Deligoez\Phony;

use Illuminate\Support\ServiceProvider;

class PhonyServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot(): void
    {
        $this->loadTranslationsFrom(__DIR__.'/Locales', 'phony');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('phony.php'),
            ], 'phony-config');

            // Registering package commands.
            // $this->commands([]);
        }
    }

    /**
     * Register the application services.
     */
    public function register(): void
    {
        // Automatically apply the package configuration
        if (! $this->app->configurationIsCached()) {
            $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'phony');
        }

        // Register the main class to use with the facade
        $this->app->singleton(
            Phony::class,
            fn () => new Phony(config('phony.default_locale'))
        );

        $this->app->alias(Phony::class, 'phony');
    }
}
