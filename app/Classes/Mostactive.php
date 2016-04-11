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

        $mathSymbol = "";

        switch($result['rankBy']) {
            case 'rise':
                $headCol4 = "升幅";
                $headCol5 = "升幅率(%)";
                $mathSymbol = "+";
                $color = "green";
                break;

            case 'fall':
                $headCol4 = "跌幅";
                $headCol5 = "跌幅率(%)";
                $color = "red";
                break;

            default:
                $headCol4 = "升跌";
                $headCol5 = "升跌率(%)";
                $color = "FFFFFF";
        }

        $dateTimeString = Helper::timestampToDateTimeString($result['updateTime']);

        $data = array(
            'mathSymbol' => $mathSymbol,
            'headCol4' => $headCol4,
            'headCol5' => $headCol5,
            'color' => $color,
            'dateTimeString' => $dateTimeString,
            'result' => $result
        );

        return view('frontend.block.htmloutput.mostactive_content', $data);

        /*$htmlOutput = "
        <thead class='mostActive-realtime-thead' datetime='".$dateTimeString."'>
            <tr>
                <th>號碼</th>
                <th>名稱</th>
                <th>現價</th>
                <th>".$headCol4."</th>
                <th>".$headCol5."</th>
                <th>成交量</th>
            </tr>
        </thead>
        ";

        $htmlOutput .= "<tbody class='mostActive-realtime'>";

        foreach($result['entryList'] AS $stock) {

            $open = $stock['open'];
            $openOutput = number_format($open / 1000, 3);

            $price = $stock['price'];
            $priceOutput = number_format($price / 1000, 3);

            $rise = ($price - $open);
            $riseOutput = $mathSymbol.number_format($rise / 1000, 3);

            $risePercentage = $rise / $stock['open'] * 100;
            $risePercentageOutput = $mathSymbol.number_format($risePercentage, 2).'%';

            $htmlOutput .= "
            <tr>
                <td>".$stock['code']."</td>
                <td>".$stock['name']['zh_TW']."</td>
                <!--<td>".$openOutput."</td>-->
                <td style='font-weight: bold;'>".$priceOutput."</td>
                <td style='color: ".$color.";'>".$riseOutput."</td>
                <td style='color: ".$color.";'>".$risePercentageOutput."</td>
                <td>".$stock['trades']."</td>
            </tr>";

        }

        $htmlOutput .= "<tr><td colspan='6' align='right'>最后更新日期: ".$dateTimeString."</td></tr>";

        $htmlOutput .= "</tbody>";

        return $htmlOutput;*/
    }

}