<?php

namespace Ublabs\BladeCoreuiIcons;

use BladeUI\Icons\Factory;
use Illuminate\Support\ServiceProvider;

class BladeCoreuiIconsServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->callAfterResolving(Factory::class, function (Factory $factory) {
            $factory->add('coreui-icons', [
                'path' => __DIR__ . '/../resources/svg',
                'prefix' => 'cui',
            ]);
        });
    }

    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../resources/svg' => public_path('vendor/blade-coreui-icons'),
            ], 'blade-coreui-icons');
        }
    }
}
