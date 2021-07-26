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
                'paths' =>  [
                    __DIR__ . '/../resources/svg/brand',
                    __DIR__ . '/../resources/svg/flag',
                    __DIR__ . '/../resources/svg/free',
                ],
                'prefix' => 'cui',
            ]);
        });
    }

    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../resources/svg/brand' => public_path('vendor/blade-coreui-icons'),
                __DIR__ . '/../resources/svg/flag' => public_path('vendor/blade-coreui-icons'),
                __DIR__ . '/../resources/svg/free' => public_path('vendor/blade-coreui-icons'),
            ], 'blade-coreui-icons');
        }
    }
}
