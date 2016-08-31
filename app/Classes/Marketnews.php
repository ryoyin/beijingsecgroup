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

        $api_url = 'http://iportal4.infocast.hk/bjsec/iportal-api/ajax/news/getNewsList?dateFrom='.$dateFrom.'&dateTo='.$dateTo.'&type=&locale=zh_CN&pageSize=300&curShowingPage=0';
        //http://iportal4.infocast.hk/bjsec/iportal-api/ajax/news/getNewsList?type=&locale=zh_CN&pageSize=300&curShowingPage=0

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

    public function getMarketNewsByGroup($group, $type = NULL, $page = 0, $show = 30) {
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

        return $this->marketnews($member, $type, $page, $show, $group);
    }

    public function marketnews($member, $type, $page, $show, $group = NULL) {

        $init = $page * $show;

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
            ->orderBy('times', 'desc')->paginate($show);
//        exit;

        if($type == 'main') $marketNews->setPath('market-news')->appends(['group' => $group])->render();

        $data = array('marketnews' => $marketNews);

        switch($type) {
            case 'main':
                $return = view('frontend.block.htmloutput.marketnews_content_main', $data);
                break;
            default:
                $return = view('frontend.block.htmloutput.marketnews_content', $data);
        }

        return $return;

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