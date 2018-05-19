<?php
namespace Agencms\LaravelPreset;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\Console\PresetCommand;

class AgencmsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        PresetCommand::macro('agencms', function ($command) {
            Preset::install();

            $command->info('Agencms Preset installed. Please compile your assets!');
        });
    }
}
