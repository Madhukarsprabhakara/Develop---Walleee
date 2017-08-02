<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
        \App\Console\Commands\SortLeaderBoard::class,
        //\App\Console\Commands\SendEveningEmail::class,
        \App\Console\Commands\DailySavingsCompute::class,
        \App\Console\Commands\DispatchThresholdEmails::class
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')
        //          ->hourly();
        $schedule->command('Sort:leaderboard')->everyTenMinutes()->withoutOverlapping();
        //$schedule->command('Dispatch:ThresholdEmails')->everyTenMinutes()->withoutOverlapping();
        //$schedule->command('DailySavings:Compute')->everyTenMinutes()->withoutOverlapping();
        
    }

    /**
     * Register the Closure based commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        require base_path('routes/console.php');
    }
}
