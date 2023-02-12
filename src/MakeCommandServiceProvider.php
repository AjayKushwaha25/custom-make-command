<?php

namespace AjayKushwaha25\CustomMakeCommand;

use Illuminate\Support\ServiceProvider;

class MakeCommandServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                \AjayKushwaha25\CustomMakeCommand\Console\Commands\TraitMakeCommand::class,
                \AjayKushwaha25\CustomMakeCommand\Console\Commands\CustomClassMakeCommand::class
            ]);
        }
    }
}
