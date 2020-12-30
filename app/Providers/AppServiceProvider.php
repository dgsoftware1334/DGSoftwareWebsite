<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\URL;
use Illuminate\Foundation\Console\PresetCommand;
use Laravel\Ui\UiCommand; 
use Laravel\Ui\AuthCommand;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
         UiCommand::macro('nowui', function ($command) {
            NowUiPreset::install();
            
            $command->info('Now Ui scaffolding installed successfully.');
        });

        if (env('APP_ENV') !== 'local') {
            \URL::forceScheme('https');
        }
    }
}
