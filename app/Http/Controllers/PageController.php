<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App;
use App\Http\Requests;

use Carbon\Carbon;

class PageController extends Controller
{

	public function __construct() {

		date_default_timezone_set('Asia/Hong_Kong');

	}

	public function homepage() {

		$marketNews = New App\Classes\Marketnews();

		$data = array(
			'newsInfo' => $marketNews->getMarketNewsByGroup('A'), //新聞資訊
			'investInfo' => $marketNews->getMarketNewsByGroup('B'), //投資錦囊
			'companyInfo' => $marketNews->getMarketNewsByGroup('C'), //公司資料
			'marketInfo' => $marketNews->getMarketNewsByGroup('D'), //市場資訊
			'mostactive' => array('rise', 'fall', 'turnover', 'volume') //活跃股票
		);

		return view('frontend.homepage', $data);

	}

	public function marketnews() {

		$marketNews = New App\Classes\Marketnews();

		$data = array (
			'newsInfo' => $marketNews->getMarketNewsByGroup('A', 'main', 0, 10) //新聞資訊
		);

		return view('frontend.marketnews', $data);

	}

	public function companystructure() {

		return view('frontend.companystructure');

	}

	public function download() {

		return view('frontend.download');

	}

	public function aboutus() {

		return view('frontend.aboutus');

	}

	public function contactus() {

		return view('frontend.contactus');

	}

}
