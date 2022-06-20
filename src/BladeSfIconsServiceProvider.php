<?php

declare(strict_types=1);

namespace BladeUI\SfIcons;

use BladeUI\Icons\Factory;
use Illuminate\Contracts\Container\Container;
use Illuminate\Support\ServiceProvider;

final class BladeSfIconsServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->registerConfig();

        $this->callAfterResolving(Factory::class, function (Factory $factory, Container $container) {
            $config = $container->make('config')->get('blade-sf-icons', []);

            $factory->add('sf-icon', array_merge(['path' => __DIR__ . '/../../../public/icons/svg'], $config));
        });
    }

    private function registerConfig(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/blade-sf-icons.php', 'blade-sf-icons');
    }

    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../resources/svg' => public_path('vendor/blade-sf-icons'),
            ], 'blade-sf-icons');

            $this->publishes([
                __DIR__ . '/../config/blade-sf-icons.php' => $this->app->configPath('blade-sf-icons.php'),
            ], 'blade-sf-icons-config');
        }
    }
}