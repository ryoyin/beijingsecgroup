<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;

use App\Http\Requests;

class EmailController extends Controller
{

	public function send_web_enquiry(Request $request) {

        // 傳送給郵件view的變數資料
        $template_data = array(
            'sexual'    => $request->input('enquiry_sexual'),
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
        Mail::send('email.contactus', $template_data, function($message) use ($userinfo) {
            $message->from('web@beijingsecgroup.com');
            $message->to($userinfo['email'])->subject($userinfo['subject']);
        });
	  
        // get mail result
        if(count(Mail::failures()) > 0){
            $message = "failed";
        } else {
            $message = "sent";
        }

		return $message;
	}

	public function test_mail_out() {

        Mail::raw('From Beijingsecgroup to Gmail', function ($message) {
            $message->from('royho@beijingsecgroup.com');
            $message->to('royho.bsg@gmail.com')->subject('hello');
        });

        if(count(Mail::failures()) > 0){
            $message = "failed";
        } else {
            $message = "sent";
        }

		return $message;
	}

    public function test_mail_in() {

        // Backup your default mailer
        $mail_backup = Mail::getSwiftMailer();

        // Setup your gmail mailer
        $transport = \Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, 'ssl');
        $transport->setUsername('royho.bsg@gmail.com');
        $transport->setPassword('.ari2000');
//        $transport->setStreamOptions(array('ssl' => array('allow_self_signed' => true, 'verify_peer' => false)));
        // Any other mailer configuration stuff needed...

        $gmail = new \Swift_Mailer($transport);

        // Set the mailer as gmail
        Mail::setSwiftMailer($gmail);

        Mail::raw('From Gmail to Beijingsecgroup', function ($message) {
            $message->from('royho.bsg@gmail.com');
            $message->to('royho@beijingsecgroup.com')->subject('hello');
        });

        // get mail result
        if(count(Mail::failures()) > 0){
            $message = "failed";
        } else {
            $message = "sent";
        }

        // Restore your original mailer
        Mail::setSwiftMailer($mail_backup);

        return $message;

    }
}

