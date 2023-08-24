<?php

namespace App\Console;

use App\Models\User;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use PHPUnit\Framework\Attributes\After;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        $schedule->command('delete:inactive-users')
            ->before(function () {
                //do what u want to before this cron job
            })
            ->after(function () {
                //do what u want after this cron job
            })
            ->everyMinute();
        // $schedule->command('delete:inactive-users')->everyMinute();
        // $schedule->call(function () {
        //     User::withTrashed()->where("status", 0)->restore();
        // })->hourly();
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__ . '/Commands');

        require base_path('routes/console.php');
    }
}
