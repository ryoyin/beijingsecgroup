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

    public function marketnews(Request $request) {

        $group = 'A';
        $type = 'main';
        $page = 0;
        $show = 10;

        if($request->has('group') && $request->has('type') && $request->has('page') && $request->has('show')) {
            $group = $request->input('group');
            $type = $request->input('type');
            $page = $request->input('page');
            $show = $request->input('show');
        }

        $marketNews = New App\Classes\Marketnews();

        $data = array (
            'newsInfo' => $marketNews->getMarketNewsByGroup($group, $type, $page, $show) //新聞資訊
        );

        return $data['newsInfo'];
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
        $api_url = 'http://iportal4.infocast.hk/bjsec/iportal-api/ajax/quote/hk/'.$code;
        $api_response = file_get_contents($api_url);

        $htmlOutput = $this->stockEnquiryHTMLOutput($api_response);

        return $htmlOutput;

    }

    private function stockEnquiryHTMLOutput($api_response) {
        $response = json_decode($api_response, TRUE);

        $different = ($this->convertThousand($response['lastPrice'] - $response['pvClose']));
        $different_percentage = round((($response['lastPrice'] - $response['pvClose']) / $response['pvClose'] * 100), 3).'%';

        $data = array(
            'code' => $response['code'],
            'stockName' => $response['name']['zh_CN'],
            'lastPrice' => $this->convertThousand($response['lastPrice']),
            'different' => $different.' ('.$different_percentage.')',
            'open' => $this->convertThousand($response['open']),
            'pvClose' => $this->convertThousand($response['pvClose']),
            'high' => $this->convertThousand($response['high']),
            'low' => $this->convertThousand($response['low']),
            'yearHigh' => $this->convertThousand($response['yearHigh']),
            'yearLow' => $this->convertThousand($response['yearLow']),
            'bid' => $this->convertThousand($response['bid']),
            'ask' => $this->convertThousand($response['ask']),
            'turnover' => $this->convertMillion($response['turnover']),
            'volume' => $this->convertMillion($response['volume']),
            'currency' => $response['currency'],
            'lotSize' => $response['lotSize'],
            'bidSprd' => $this->convertThousand($response['bidSprd']),
            'askSprd' => $this->convertThousand($response['askSprd']),
            'issueShares' => $this->convertMillion($response['issueShares']),
            'updateTime' => $this->timestampToDateTimeString($response['updateTime'])
        );

        return view('frontend.block.htmloutput.stockenquiry_content', $data);
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
