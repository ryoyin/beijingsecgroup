<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PageController extends Controller
{

	public function homepage() {

		return view('frontend.homepage');

	}

	public function marketnews() {

		return view('frontend.marketnews');

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
