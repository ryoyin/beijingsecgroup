<?php
/**
 * Created by PhpStorm.
 * User: Roy
 * Date: 2016/3/20
 * Time: 下午 11:36
 */

namespace App\Classes;

use App;

class Test
{
    public function call_me() {
        $mostActive = App\MostActive::where("type", 'rise')->first();
        $result = $mostActive->api_response;

        return $result;
    }
}