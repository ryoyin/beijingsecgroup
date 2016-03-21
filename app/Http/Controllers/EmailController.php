<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class EmailController extends Controller
{

	public function send_web_enquiry(Request $request) {

		// 傳送給郵件view的變數資料
	  $template_data = array(
			'name'    => $request->input('enquiry_name'),
			'tel'     => $request->input('enquiry_tel'),
			'email'   => $request->input('enquiry_email'),
			'content' => $request->input('enquiry_content')
	  );

	  // 收件者資料
	  $userinfo = array(
	    'email'=>'royho@beijingsecgroup.com',
	    'subject'=>'Enquiry from BSG Web Site.'
	  );

	  // 寄送郵件，使用use方法將資料從外部傳送給匿名函式使用
	  \Mail::send('email.contactus', $template_data, function($message) use ($userinfo) {
	      $message->to($userinfo['email'])->subject($userinfo['subject']);
	  });
	  
	  // get mail result
	  if(count(\Mail::failures()) > 0){
      $message = "failed";
    } else {
    	$message = "sent";
    }

		return $message;
	}
}
