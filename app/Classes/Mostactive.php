<?php

namespace App\Classes;

use App;
use App\Http\Requests;
use App\Helpers\Helper;

class Mostactive
{

    public function requestMostActive($demo = TRUE) {
        $typeArr = array('rise', 'fall', 'turnover', 'volume');

        $api_response_array = array();

        foreach($typeArr AS $type) {
            $returnResult = $this->getMostActiveByAPI($type, $demo);

            if(!$returnResult) return 'failed';

            $api_response_array[$type] = $returnResult;
        }

        foreach($api_response_array AS $type => $api_response) {
            $mostActive = App\MostActive::where('type', $type)->first();
            $mostActive->type = $type;
            $mostActive->api_response = $api_response;
            $mostActive->save();
        }

        return 'success';
    }

    private function getMostActiveByAPI($rankby, $demo) {

        $valid = TRUE;

        $api_url = 'http://iportal4.infocast.hk/bjsec/iportal-api/ws/mostActive/eqty/'.$rankby;

        $api_response = file_get_contents($api_url);
        $returnResult = json_decode($api_response, true);

        if(!$returnResult || $returnResult == '') $valid = FALSE;


        if(is_array($returnResult) && !$demo) {
            foreach($returnResult['entryList'] AS $stock) {
                if ($stock['open'] == 0)  $valid = FALSE;
            }
        }

        if($valid) return $api_response;

        return FALSE;

    }

    public function mostActive($request) { //rise, fall, turnover, volume

        $returnJSON = $request->input('returnJSON');
        $rankby = $request->input('rankby');


        $mostActive = App\MostActive::where('type', $rankby)->first();
        $result = json_decode($mostActive->api_response, TRUE);

        if($returnJSON) {
            return json_encode($result);
        }

        return $this->stockActiveHTMLOutput($result);
    }

    private function stockActiveHTMLOutput($result) {

        $headCol4 = "升跌";
        $headCol5 = "升跌率(%)";
        $headCol6 = "成交金额";

        switch($result['rankBy']) {
            case 'rise':
                $headCol4 = "升幅";
                $headCol5 = "升幅率(%)";
                break;

            case 'fall':
                $headCol4 = "跌幅";
                $headCol5 = "跌幅率(%)";
                break;

            case 'volume':
                $headCol6 = "成交量";
                break;
        }

        $dateTimeString = Helper::timestampToDateTimeString($result['updateTime']);

        $data = array(
            'headCol4' => $headCol4,
            'headCol5' => $headCol5,
            'headCol6' => $headCol6,
            'dateTimeString' => $dateTimeString,
            'result' => $result
        );

        //dd($result);

//        exit;

        return view('frontend.block.htmloutput.mostactive_content', $data)->render();

    }

}