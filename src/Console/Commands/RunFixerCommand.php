<?php

namespace IntelligentSoftwareDevelopment\FixerCommand\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Console\Command\Command as CommandAlias;

class RunFixerCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fix';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Run php-fixer';

    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        echo exec('php vendor/friendsofphp/php-cs-fixer/php-cs-fixer fix');

        return CommandAlias::SUCCESS;
    }
}
