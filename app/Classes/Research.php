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

    public function getResearch($show = 50, $status = 2) {

        $research = App\Research::orderBy('publish_date', 'desc');

        if($status === NULL) {
            $research->where('status', '!=', 4);
        } else {
            $research->where('status', $status);
        }

        return $research->paginate($show);

    }

}