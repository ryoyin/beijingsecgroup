<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

use App;
use Mail;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        // Commands\Inspire::class,
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


        $schedule->call(function () {
            $mostActive = New App\Classes\Mostactive();
            $request_mostactive_result =  $mostActive->requestMostActive();

//            $request_mostactive_result = 'ok';
/*            Mail::raw($request_mostactive_result, function ($message) {
                $message->from('royho@beijingsecgroup.com');
                $message->to('royho@beijingsecgroup.com')->subject('Retrieve Most Active');
            });*/

            $marketNews = New App\Classes\Marketnews();
            if(!$marketNews->requestMarketNews()) {
                $request_marketnews_result =  "no news retrieved.";
            } else {
                $request_marketnews_result =  "retrieve news done.";
            }

  /*          Mail::raw($request_marketnews_result, function ($message) {
                $message->from('royho@beijingsecgroup.com');
                $message->to('royho@beijingsecgroup.com')->subject('Retrieve Market News');
            });*/

        })->everyTenMinutes();

    }
}
