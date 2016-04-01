<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\Http\Requests;
use Carbon\Carbon;

class InfocastController extends Controller
{
    public function requestMarketNews() {
        $marketNews = New App\Classes\Marketnews();
        if(!$marketNews->requestMarketNews()) {
           return "no news retrieved.";
        }

        return "retrieve news done.";
    }

    public function marketnews() {
        $marketNews = New App\Classes\Marketnews();
        echo $marketNews->marketnews('FIN');
    }

    public function requestMostActive() {
        $mostActive = New App\Classes\Mostactive();
        echo $mostActive->requestMostActive();
    }

    public function mostActive(Request $request) {
        $mostActive = New App\Classes\Mostactive();
        echo $mostActive->mostActive($request);
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
        $turnover = $this->convertMillion($response['turnover']);
        $volume = $this->convertMillion($response['volume']);
        $currency = $response['currency'];
        $lotSize = $response['lotSize'];
        $bidSprd = $this->convertThousand($response['bidSprd']);
        $askSprd = $this->convertThousand($response['askSprd']);
        $issueShares = $this->convertMillion($response['issueShares']);
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

    private function convertMillion($value) {
        return number_format(($value / 1000000), 3).'M';
    }

    private function timestampToDateTimeString($timestamp) {
        $timeToSecond = $timestamp / 1000;
        $newsTime = Carbon::now();
        $newsTime->timestamp = $timeToSecond;

        return $newsTime->toDateTimeString();
    }

}
