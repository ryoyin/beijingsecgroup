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


//        $schedule->call(function () {
//            $mostActive = New App\Classes\Mostactive();
//            $request_mostactive_result =  $mostActive->requestMostActive();
//
////            $request_mostactive_result = 'ok';
///*            Mail::raw($request_mostactive_result, function ($message) {
//                $message->from('royho@beijingsecgroup.com');
//                $message->to('royho@beijingsecgroup.com')->subject('Retrieve Most Active');
//            });*/
//
//            $marketNews = New App\Classes\Marketnews();
//            if(!$marketNews->requestMarketNews()) {
//                $request_marketnews_result =  "no news retrieved.";
//            } else {
//                $request_marketnews_result =  "retrieve news done.";
//            }
//
//  /*          Mail::raw($request_marketnews_result, function ($message) {
//                $message->from('royho@beijingsecgroup.com');
//                $message->to('royho@beijingsecgroup.com')->subject('Retrieve Market News');
//            });*/
//
//        })->everyTenMinutes();

        $schedule->call(function () {

            $server_list = array(
                "vm_server" => array("fullname" => "虚拟伺服器", "ip" => "192.168.10.10", "status" => "pending"),
                "domain_server" => array("fullname" => "域和文件服务器", "ip" => "192.168.10.11", "status" => "pending"),
                "mail_server" => array("fullname" => "邮件服务器", "ip" => "192.168.10.12", "status" => "pending"),
                "ricoh_printer" => array("fullname" => "Ricoh 打印机", "ip" => "192.168.10.254", "status" => "pending"),
                "test_fail" => array("fullname" => "演示测试失败 (忽视  )", "ip" => "192.168.10.200", "status" => "pending")
            );

            foreach($server_list AS $server) {

                $command = "ping ".$server['ip']." -n 1";
                echo $command;

                exec($command, $output, $return_var);

                $output2 = explode("=", $output[2]); //回覆自 192.168.10.125: 目的地主機無法連線。

                if(!is_numeric(end($output2))) {
                    Mail::raw('Ping fail to server: '.$server['fullname'], function ($message) {
                        $message->from('royho@beijingsecgroup.com');
                        $message->to('royho@beijingsecgroup.com')->subject('Ping Fail!');
                    });
                }

                unset($output);

            }

        })->everyMinute();
    }
}
