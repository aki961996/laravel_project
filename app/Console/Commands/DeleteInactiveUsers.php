<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class DeleteInactiveUsers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'delete:inactive-users';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command will delete all the Inactive users';

    /**
     * Execute the console command.
     */
    public function handle()
    {

        User::where("status", 0)->delete();
        // User::where("status", 0)->restore();
    }
}
