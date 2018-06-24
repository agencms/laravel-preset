<?php

namespace Agencms\LaravelPreset;

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\File;
use Illuminate\Foundation\Console\Presets\Preset as LaravelPreset;

class Preset extends LaravelPreset
{
    public static function install()
    {
        static::updateMix();
        static::updateViews();
        static::updateRoutes();
        static::updateStyles();
        static::updateScripts();
        static::updatePackages();
    }

    public static function updatePackageArray($packages)
    {
        return array_merge([
            'laravel-mix-tailwind' => '^0.1.0',
            'laravel-mix-purgecss' => '^2.2.0',
            'vue' => '^2.5.16',
            'tailwindcss' => '^0.6.1',
        ], Arr::except($packages, [
            'popper.js',
            'lodash',
            'jquery',
            'bootstrap',
        ]));
    }

    public static function updateMix()
    {
        copy(__DIR__.'/stubs/webpack.mix.js', base_path('webpack.mix.js'));
        copy(__DIR__.'/stubs/tailwind.js', base_path('tailwind.js'));
    }

    public static function updateRoutes()
    {
        copy(__DIR__.'/stubs/routes/web.php', base_path('routes/web.php'));
    }

    public static function updateViews()
    {
        File::cleanDirectory(resource_path('views'));

        mkdir(resource_path('views/layouts'));

        copy(
            __DIR__.'/stubs/views/layouts/default.blade.php',
            resource_path('views/layouts/default.blade.php')
        );
    }

    public static function updateScripts()
    {
        copy(__DIR__.'/stubs/app.js', resource_path('assets/js/app.js'));
        copy(__DIR__.'/stubs/bootstrap.js', resource_path('assets/js/bootstrap.js'));
    }

    public static function updateStyles()
    {
        File::cleanDirectory(resource_path('assets/sass'));

        copy(__DIR__.'/stubs/app.sass', resource_path('assets/sass/app.sass'));
    }
}
