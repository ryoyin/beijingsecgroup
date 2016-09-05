<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;
use App;

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
            'email'=>'cs@bjsthkgroup.com',
            'subject'=>'Enquiry from BSG Web Site.',
            'frmEmail' => $template_data['email']
        );

        // 寄送郵件，使用use方法將資料從外部傳送給匿名函式使用
        Mail::send('email.contactus', $template_data, function($message) use ($userinfo) {
            $message->from($userinfo['frmEmail']);
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

    public function send_web_appointment(Request $request) {

        // 傳送給郵件view的變數資料
//        dd($request);
//        exit;

        //assign value
        $sexual = $request->input('appointment_sexual');
        $name = $request->input('appointment_name');
        $tel = $request->input('appointment_tel');
        $address = $request->input('appointment_address');

        //get next account number
        $system_param = App\Systemparam::where('param_name', '=', 'trading_system_account_no')->first();
        $trading_system_value = unserialize($system_param->param_value);
        $accno = $trading_system_value['next_value'];

        //generate next account number and save to DB
        $trading_system_value['next_value'] = $trading_system_value['next_value'] + 1;
        $system_param->param_value = serialize($trading_system_value);
        $system_param->save();

        $trading_account = New App\Tradingaccount;

        $trading_account->sexual = $sexual;
        $trading_account->name = $name;
        $trading_account->tel = $tel;
        $trading_account->address = $address;
        $trading_account->account_no = $accno;

        $trading_account->save();

        $template_data = array(
            'sexual'   => $sexual,
            'name'     => $name,
            'tel'      => $tel,
            'address'  => $address,
            'accno'    => $accno
        );

        // 收件者資料
        $userinfo = array(
            'email'=>'cs@bjsthkgroup.com',
            'subject'=>'立即開戶 - '.$template_data['name']
//            'frmEmail' => $template_data['email']
        );

        // 寄送郵件，使用use方法將資料從外部傳送給匿名函式使用
        Mail::send('email.appointment', $template_data, function($message) use ($userinfo) {
            $message->from($userinfo['email']);
            $message->to($userinfo['email'])->subject($userinfo['subject']);
        });

        // get mail result
        if(count(Mail::failures()) > 0){
            $message = "failed";
        } else {
            $message = $accno;
//            $message = 12;
        }

        return $message;
    }

	public function test_mail_out() {

        Mail::raw('From Beijingsecgroup to Gmail', function ($message) {
            $message->from('royho@bjsthkgroup.com');
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
            $message->to('royho@bjsthkgroup.com')->subject('hello');
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

