<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\Http\Requests;
use Carbon\Carbon;

class InfocastController extends Controller
{

	private $dateTo;
	private $dateFrom;

	public function __construct() {

		/*Get real time news*/
		$today = Carbon::now()->addDay();

		$this->dateTo         = Carbon::now();
		$this->dateTo->year   = $today->year;
		$this->dateTo->month  = $today->month;
		$this->dateTo->day    = $today->day;
		$this->dateTo->hour   = ($today->hour + 1);
		$this->dateTo->minute = 0;
		$this->dateTo->second = 0;

		$this->dateFrom         = Carbon::now();
		$this->dateFrom->year   = $today->year;
		$this->dateFrom->month  = $today->month;
		$this->dateFrom->day    = $today->day;
		$this->dateFrom->hour   = ($today->hour - 1);
//		$this->dateFrom->hour   = 0;
		$this->dateFrom->minute = 0;
		$this->dateFrom->second = 0;

	}

    public function requestMarketNews() {
        $dateFrom = $this->dateFrom->timestamp * 1000;
        $dateTo   = $this->dateTo->timestamp * 1000;

        $api_url = 'http://iweb-demo.infocast.hk/iportal-api/ajax/news/getNewsList?dateFrom='.$dateFrom.'&dateTo='.$dateTo.'&type=&locale=zh_TW&pageSize=300&curShowingPage=0';
//        echo $api_url;

        $result = json_decode(file_get_contents($api_url), true);

        if($result['totalNewsSize'] == 0) return 'no news.';

        foreach($result['newsData'] AS $key => $news) {

            $times = $this->timestampToDateTimeString($news['time']);

            /* Start - Convert content */
            $content = str_replace("\r\n", "<br>", $news['content']);
            $content = str_replace(" ", "&nbsp;", $content);

            $marketNews = New App\MarketNews;
            $marketNews->times = $times;
            $marketNews->infocastid = $news['id'];
            $marketNews->type = $news['type'];
            $marketNews->headline = $news['headline'];
            $marketNews->content = $content;
            $marketNews->stockcode = $news['stockCode'];
            $marketNews->save();

        }
        echo 'done';
    }

	public function marketnews() {

        $marketNews = App\MarketNews::take(30)->orderBy('times', 'desc')->get();

        $htmlOutput = '';

		foreach($marketNews AS $key => $news) {

            $htmlOutput .= $this->newsHTMLOutput($news, $key);

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
            <td>".$news['times']."</td>
            <td>".$news['type']."</td>
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

    public function stockEnquiry(Request $request) {

        $code = trim($request->input('code'));

        if(!is_numeric($code)) return 'failed';

        $code = str_pad($code, 5, '0', STR_PAD_LEFT);
        $api_url = 'https://iweb-demo.infocast.hk/bjsec/iportal-api/ajax/quote/hk/'.$code;
        $api_response = file_get_contents($api_url);

        $htmlOutput = $this->stockEnquiryHTMLOutput($api_response);

        return $htmlOutput;

    }

    private function stockEnquiryHTMLOutput($api_response) {
        $response = json_decode($api_response, TRUE);

        $code = $response['code'];
        $stockName = $response['name']['zh_CN'];
        $lastPrice = $this->convertThousand($response['lastPrice']);
        $different = '-0.200(0.65%)';
        $open = $this->convertThousand($response['open']);
        $pvClose = $this->convertThousand($response['pvClose']);
        $high = $this->convertThousand($response['high']);
        $low = $this->convertThousand($response['low']);
        $yearHigh = $this->convertThousand($response['yearHigh']);
        $yearLow = $this->convertThousand($response['yearLow']);
        $bid = $this->convertThousand($response['bid']);
        $ask = $this->convertThousand($response['ask']);
        $turnover = $this->convertMilion($response['turnover']);
        $volume = $this->convertMilion($response['volume']);
        $currency = $response['currency'];
        $lotSize = $response['lotSize'];
        $bidSprd = $this->convertThousand($response['bidSprd']);
        $askSprd = $this->convertThousand($response['askSprd']);
        $issueShares = $this->convertMilion($response['issueShares']);
        $updateTime = $this->timestampToDateTimeString($response['updateTime']);

        $htmlOutput = '
        <div class="row">
            <div class="col-md-12 heading">'.$code.'<br>'.$stockName.'</div>
        </div>
        <div class="row">
            <div class="col-md-5"><span class="last-price">'.$lastPrice.'</span><br>
                <!--<span class="diff api_diff" style="color: red;">'.$different.'</span>-->
            </div>
            <div class="col-md-3 open">開市<br><span class="api_open">'.$open.'</span></div>
            <div class="col-md-4 open">前收市<br><span class="api_pvClose">'.$pvClose.'</span></div>
        </div>

        <div class="row">
            <div class="col-md-3 small">最高<br><span class="api_high">'.$high.'</span></div>
            <div class="col-md-3 small">最低<br><span class="api_low">'.$low.'</span></div>
            <div class="col-md-3 small">年最高<br><span class="api_yearHigh">'.$yearHigh.'</span></div>
            <div class="col-md-3 small">年最低<br><span class="api_yearLow">'.$yearLow.'</span></div>
        </div>

        <div class="row">
            <div class="col-md-3 small">買入<br><span class="api_bid">'.$bid.'</span></div>
            <div class="col-md-3 small">賣出<br><span class="api_ask">'.$ask.'</span></div>
            <div class="col-md-3 small">成交額<br><span class="api_turnover">'.$turnover.'</span></div>
            <div class="col-md-3 small">成交量<br><span class="api_volume">'.$volume.'</span></div>
        </div>

        <div class="row">
            <div class="col-md-3 small">貨幣<br><spa class="api_currency"n>'.$currency.'</span></div>
            <div class="col-md-3 small">交易單位<br><span class="api_lotSize">'.$lotSize.'</span></div>
            <div class="col-md-3 small">買賣差價<br><spa class="api_bidSprd">'.$bidSprd.'</span> / <span class="api_askSprd">'.$askSprd.'</span></div>
            <div class="col-md-3 small">發行股本<br><span class="api_issueShares">'.$issueShares.'</span></div>
        </div>

        <div class="row">
            <div class="col-md-12 update-time">最後更新時間: <span class="api_updateTime">'.$updateTime.'</span></div>
        </div>
        ';

        return $htmlOutput;
    }

    private function convertThousand($value) {
        return number_format(($value / 1000), 3);
    }

    private function convertMilion($value) {
        return number_format(($value / 1000000), 3).'M';
    }

    private function timestampToDateTimeString($timestamp) {
        $timeToSecond = $timestamp / 1000;
        $newsTime = Carbon::now();
        $newsTime->timestamp = $timeToSecond;

        return $newsTime->toDateTimeString();
    }

}
