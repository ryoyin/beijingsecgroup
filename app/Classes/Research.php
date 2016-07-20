<?php
/**
 * Created by PhpStorm.
 * User: Royho
 * Date: 30/3/2016
 * Time: 16:11
 */

namespace app\Classes;

use App;
use App\Helpers\Helper;
use Carbon\Carbon;

class Research
{

    public function getResearch() {

        $research = App\Research::where('status', 2)->orderBy('publish_date', 'desc')->paginate(6);

        return $research;

    }

}