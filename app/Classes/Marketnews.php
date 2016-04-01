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

class Marketnews
{

    public function requestMarketNews() {

        $lastNews = App\MarketNews::orderBy('times', 'desc')->first();

        if(is_null($lastNews)) {
            $dateFrom = $this->getPreviousHour()->timestamp;
        } else {
            $lastTimes = Carbon::parse($lastNews->times);
            $lastTimes->second = ($lastTimes->second + 1);
            $dateFrom = $lastTimes->timestamp;
        }

        /*Convert Microsecond*/
        $dateFrom = (string) ($dateFrom * 1000);
        $dateTo   = (string) ($this->getNextHour()->timestamp * 1000);

        $api_url = 'http://iweb-demo.infocast.hk/iportal-api/ajax/news/getNewsList?dateFrom='.$dateFrom.'&dateTo='.$dateTo.'&type=&locale=zh_CN&pageSize=300&curShowingPage=0';

        $result = json_decode(file_get_contents($api_url), true);

        if($result['totalNewsSize'] == 0) return FALSE;

        foreach($result['newsData'] AS $key => $news) {

            $times = Helper::timestampToDateTimeString($news['time']);

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

        return TRUE;
    }

    public function getMarketNewsByGroup($group) {
        switch($group) {
            case 'A': //新聞資訊
                $member = array('FIN', 'CNSC', 'OSN', 'WNC', 'VHB', 'DLV', 'LCN');
                break;

            case 'B': //投資錦囊
                $member = array('RTSC', 'COM', 'WCTL', 'SGC', 'RUM', 'FST', 'CPR', 'RSH', 'PFT', 'FOCC', 'VHB', 'FJC');
                break;

            case 'C': //公司資料
                $member = array('CPR', 'RSH', 'COB', 'COV', 'SHHK');
                break;

            case 'D': //市場資訊
                $member = array('MPR', 'DIV', 'FIB', 'FIX', 'AHL', 'SHHK');
                break;
        }

        return $this->marketnews($member);
    }

    public function marketnews($member) {

        $marketNews = App\MarketNews::
            where(function($query) use ($member) {
                for($i=0;$i<count($member);$i++) {
                    if($i==0){
                        $query->where('type',$member[$i]);
                    }else{
                        $query->orWhere('type',$member[$i]);
                    }
                }
            })
            ->take(30)->orderBy('times', 'desc')->get();
//        exit;

        $htmlOutput = '';

        foreach($marketNews AS $news) {

            $htmlOutput .= $this->newsHTMLOutput($news);

        }

        return $htmlOutput;

    }

    /*Create HTML Output for News*/
    private function newsHTMLOutput($news) {

        $onclickHTML = "";
        $moreHTML = "";

        if( $news['content'] != "") {
            $onclickHTML = "onclick='popNews(".$news['infocastid'].");'";
            $moreHTML = " <span>- 更多</span>";
        }

        $htmlOutput = "
        <tr ".$onclickHTML.">
            <td>".$news['times']."</td>
            <td>
            ".$news['headline'].$moreHTML."
            <div class='marketnews-content' newsid='".$news['infocastid']."' style='display: none;'>
                <div class='headline'>".$news['headline']."</div>
                <div class='dateTime'>".$news['dateTime']."</div>
                <div class='contentHTML'>".$news['content']."</div>
            </div>
            </td>
        </tr>";

        return $htmlOutput;
    }

    public static function getPreviousHour() {

        $date         = Carbon::now();
        $date->hour   = ($date->hour - 1);

        return $date;

    }

    public static function getNextHour() {

        $date         = Carbon::now();
        $date->hour   = ($date->hour + 1);

        return $date;

    }

}