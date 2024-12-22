<?php

namespace App\Console\Commands;

use App\Events\SetAlert;
use Illuminate\Console\Command;
use function Laravel\Prompts\text;

class CreateAlert extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'helldivers:alert';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create alerts for all Helldivers';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $name = text(
            label: "Hello Democracy Officer! Please enter your CallSign!",
            required: true,
        );
        $text = text(
            label: "Enter the text of new alert for Helldivers",
            required: true,
        );
        SetAlert::dispatch($name, $text);
    }
}
