<?php
/**
 * Created by PhpStorm.
 * User: Royho
 * Date: 30/3/2016
 * Time: 15:32
 */

namespace App\Helpers;

use App;
use Carbon\Carbon;

class Helper
{
    public static function sayHi()
    {
        return 'Hi';
    }

    public static function convertThousand($value) {
        return number_format(($value / 1000), 3);
    }

    public static function convertMillion($value) {
        return number_format(($value / 1000000), 3).'M';
    }

    public static function timestampToDateTimeString($timestamp) {
        $timeToSecond = $timestamp / 1000;
        $newsTime = Carbon::now();
        $newsTime->timestamp = $timeToSecond;

        return $newsTime->toDateTimeString();
    }

}