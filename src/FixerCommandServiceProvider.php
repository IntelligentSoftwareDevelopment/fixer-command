<?php

namespace IntelligentSoftwareDevelopment\FixerCommand;

use Illuminate\Support\ServiceProvider;
use IntelligentSoftwareDevelopment\FixerCommand\Console\Commands\RunFixerCommand;

class FixerCommandServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        if ($this->app->isLocal()) {
            $this->registerCommands();
        }
        $this->publishes([
            __DIR__ . '/.php-cs-fixer.dist.php' => base_path('.php-cs-fixer.dist.php')
        ]);
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
                RunFixerCommand::class,
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
            RunFixerCommand::class,
        ];
    }
}
