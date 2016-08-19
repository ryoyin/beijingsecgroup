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

	public function companynews() {
		return view('frontend.companynews');
	}

	public function marketnews(Request $request) {

		$marketNews = New App\Classes\Marketnews();

		$group = $request->input('group');
		if($group == '') $group = 'A';

		$groupArray = array('A' => '', 'B' => '', 'C' => '', 'D' => '');

		$groupArray[$group] = 'active';

		$data = array (
			'newsInfo'   => $marketNews->getMarketNewsByGroup($group, 'main', 0, 10), //新聞資訊
			'groupArray' => $groupArray
		);

		return view('frontend.marketnews', $data);

	}

	public function companystructure() {

		return view('frontend.companystructure');

	}

	public function research() {

		$research = New App\Classes\Research();

		$data = array(
			'researches' => $research->getResearch(10, 2)
		);

		return view('frontend.research', $data);

	}

	public function download() {

		$account_opening_form = array(
			'客户开户程序'	=> 	'客户开户程序.pdf',
			'北京首通证券香港集团开戸文件（个人或联名帐戸)表格' => '北京首通证券香港集团开戸文件（个人或联名帐戸)表格.pdf',
			'北京首通证券香港集团开戸文件（公司帐戸)表格' => '北京首通证券香港集团开戸文件（公司帐戸)表格.pdf',
			'北京首通证券香港集团协议书及附件' => '北京首通证券香港集团协议书及附件.pdf',
			'W-8BEN 表格簡要說明' => 'W-8BEN 表格簡要說明.pdf',
			'W-8BEN外国账户税收遵从法' => 'W-8BEN外国账户税收遵从法.pdf'
		);

		$immigration_form = array(
			'资本投资者入境计划协议' => '资本投资者入境计划协议.pdf',
			'资本投资者入境计划规则' => '资本投资者入境计划规则.pdf'
		);

		$charging_fee = array('2016收费表' => '2016收费表.pdf');

		$others = array(
			'客戸存款确认' => '客戸存款确认.pdf',
			'客戶提款指示' => '客戶提款指示.pdf',
			'个人身份声明' => '个人身份声明.pdf',
			'更改资料及帐户服务通知' => '更改资料及帐户服务通知.pdf',
			'股票提取指示' => '股票提取指示.pdf',
			'索取结单表格' => '索取结单表格.pdf',
			'授权第三者操作帐户' => '授权第三者操作帐户.pdf',
			'补发密码申请表' => '补发密码申请表.pdf',
			'取消交易账户表格' => '取消交易账户表格.pdf',
			'证券交收指示表格' => '证券交收指示表格.pdf',
			'证券交收表格范本' => '证券交收表格范本.pdf',
			'IPO Application Form' => 'IPO Application Form.pdf',
			'内部转移指示' => '内部转移指示.pdf',
			'股东大会投票表格' => '股东大会投票表格.pdf',
			'转让书' => '转让书.pdf'
		);

		$pdf = array(
			'开户文件' => array(
				'name' => 'account',
				'form' => $account_opening_form
			),
			'资本投资者入境计划文件' => array(
				'name' => 'agreement',
				'form' => $immigration_form
			),
			'收费表' => array(
				'name' => 'charge',
				'form' =>$charging_fee
			),
			'其他下载' => array(
				'name' => 'others',
				'form' => $others
			),
		);

		$data = array('pdf' => $pdf);

		return view('frontend.download', $data);

	}

	public function aboutus() {

		return view('frontend.aboutus');

	}

	public function appointment() {

		return view('frontend.appointment');

	}

	public function contactus() {

		return view('frontend.contactus');

	}

}
