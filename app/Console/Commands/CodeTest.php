<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CodeTest extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'code:test';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'For code testing';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // Nullsafe Operator
        $user = null;
        if ($user === null) {
            return null;
        }
        $user->email();

        // Arrow Functions
        array_filter([], function ($value) {
            return is_numeric($value);
        });

        // Optional To Nullsafe
        optional($user)->address;

        return Command::SUCCESS;
    }
}
