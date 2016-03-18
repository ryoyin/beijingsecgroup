<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\Http\Requests;
use Carbon\Carbon;

class InfocastController extends Controller
{

	private $dateToTimestamp;
	private $dateFromTimestamp;

	public function __construct() {

		/*Get real time news*/
		$today = Carbon::now()->addDay();

		$dateTo         = Carbon::now();
		$dateTo->year   = $today->year;
		$dateTo->month  = $today->month;             
		$dateTo->day    = $today->day;
		$dateTo->hour   = 0;
		$dateTo->minute = 0;
		$dateTo->second = 0;

		$this->dateToTimestamp = $dateTo->timestamp * 1000; // time 1000 for milliseconds

		$dateFrom         = Carbon::now();
		$dateFrom->year   = $today->year;
		$dateFrom->month  = $today->month;           
		$dateFrom->day    = ($today->day - 7);
		$dateFrom->hour   = 0;
		$dateFrom->minute = 0;
		$dateFrom->second = 0;

		$this->dateFromTimestamp = $dateFrom->timestamp * 1000; // time 1000 for milliseconds

	}

	public function marketnews($returnJSON = FALSE, $dateFrom = NULL, $dateTo = NULL, $page = 0) {

		if(is_null($dateFrom)) $dateFrom = $this->dateFromTimestamp;
		if(is_null($dateTo))	 $dateTo   = $this->dateToTimestamp;

		$api_url = 'http://iweb-demo.infocast.hk/iportal-api/ajax/news/getNewsList?dateFrom='.$dateFrom.'&dateTo='.$dateTo.'&type=&locale=zh_TW&pageSize=30&curShowingPage='.$page;

		$result = json_decode(file_get_contents($api_url), true);
//		return $result;

        $htmlOutput = '';
        $i = 0;

		foreach($result['newsData'] AS $key => $news) {

            $dateTimeString = $this->timestampToDateTimeString($news['time']);

			// echo $newsTime->toDateTimeString();
			$result['newsData'][$key]['dateTime'] = $dateTimeString;
            /* End - Convert Time */

            /* Start - Convert content */
			$content = str_replace("\r\n", "<br>", $news['content']);
			$content = str_replace(" ", "&nbsp;", $content);
			$result['newsData'][$key]['contentHTML'] = $content;
            /* End - Convert content */

            if(!$returnJSON) {
                $htmlOutput .= $this->newsHTMLOutput($result['newsData'][$key], $i);
                $i ++;
            }

		}

        if($returnJSON) {
            return json_encode($result);
        }

        return $htmlOutput;

	}

    /*Create HTML Output for News*/
    private function newsHTMLOutput($news, $i) {

        $onclickHTML = "";
        $moreHTML = "";

        if( $news['content'] != "") {
            $onclickHTML = "onclick='popNews(".$i.");'";
            $moreHTML = " <span>- 更多</span>";
        }

        $htmlOutput = "
        <tr ".$onclickHTML.">
            <td>".$news['dateTime']."</td>
            <td>
            ".$news['headline'].$moreHTML."
            <div class='marketnews-content' newsid='".$i."' style='display: none;'>
                <div class='headline'>".$news['headline']."</div>
                <div class='dateTime'>".$news['dateTime']."</div>
                <div class='contentHTML'>".$news['contentHTML']."</div>
            </div>
            </td>
        </tr>";

        return $htmlOutput;
    }

    public function requestMostActive() {
        $typeArr = array('rise', 'fall', 'turnover', 'volume');

        $api_response_array = array();

        foreach($typeArr AS $type) {
            $returnResult = $this->getMostActiveByAPI($type);

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

    private function getMostActiveByAPI($rankby) {

        $valid = TRUE;

        $api_url = 'https://iweb-demo.infocast.hk/bjsec/iportal-api/ws/mostActive/eqty/'.$rankby;

        $api_response = file_get_contents($api_url);
        $returnResult = json_decode($api_response, true);

        if(!$returnResult || $returnResult == '') $valid = FALSE;

        if(is_array($returnResult)) {
            foreach($returnResult['entryList'] AS $stock) {
                if ($stock['open'] == 0)  $valid = FALSE;
            }
        }

        if($valid) return $api_response;

        return FALSE;

    }

	public function mostActive(Request $request) { //rise, fall, turnover, volume

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

        $dateTimeString = $this->timestampToDateTimeString($result['updateTime']);

        $htmlOutput = "
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

        $validData = 0;

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

            $validData ++;

        }

        if($validData == 0) {
            $htmlOutput .= "<tr><td colspan='5'></td></tr>";
        }

        $htmlOutput .= "</tbody>";

        return $htmlOutput;
    }

    private function timestampToDateTimeString($timestamp) {
        $timeToSecond = $timestamp / 1000;
        $newsTime = Carbon::now();
        $newsTime->timestamp = $timeToSecond;

        return $newsTime->toDateTimeString();
    }

}
