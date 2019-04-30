<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use DB;
use App\Reservation;
class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
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

/*
        $schedule->call(function () {
          //$finished = DB::table('reservations')->where('check_out', '<', date('Y-m-d'))->value('num_rooms');
          $finished = Reservation::select('num_rooms')->where('check_out', '<', date('Y-m-d'))->get();
          foreach ($finished as $k => $v) {
          DB::table('Rooms')->where('room_num', $v)->update(array('room_available'=>0));
          }
          })->everyMinute();


*/
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
