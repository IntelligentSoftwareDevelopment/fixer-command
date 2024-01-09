<?php

namespace IntelligentSoftwareDevelopment\IdeHelperCommand;

use Illuminate\Support\ServiceProvider;

class FixerCommandServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        if ($this->app->isLocal()) {
            $this->registerCommands();
        }
    }

    public function boot(): void
    {

    }

    /**
     * Register the console commands for the package.
     *
     * @return void
     */
    protected function registerCommands(): void
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
            ]);
        }
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides(): array
    {
        return [
        ];
    }
}
