<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
|--------------------------------------------------------------------------
| Sub Domain Routes
|--------------------------------------------------------------------------
|
| This route is for admin.beijingsecgroup.com
|
*/

use App\Classes\Test;
use App\Helpers\Helper;

Route::post('/ajax/stock/stockenquiry', ['uses' => 'InfocastController@stockEnquiry', 'as' => 'ajax.stock.stockenquiry']);
Route::get('/schedule/requestmostactive', ['uses' => 'InfocastController@requestMostActive', 'as' => 'schedule.requestmostactive']);
Route::get('/schedule/requestmarketnews', ['uses' => 'InfocastController@requestMarketNews', 'as' => 'schedule.requestmarketnews']);
Route::post('/ajax/stock/mostactive', ['uses' => 'InfocastController@mostactive', 'as' => 'ajax.stock.mostactive']);

Route::get('iphoneapp', function () {
    return Redirect::to('https://itunes.apple.com/hk/app/beijing-securities-group-limited/id1091181118?mt=8');
});

Route::get('androidapp', function () {
    return Redirect::to('https://play.google.com/store/apps/details?id=hk.com.bjsg.imobility');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    /*Infocast API for Index*/
    /*API CALL*/

    //Route::post('/ajax/stock/mostactive', ['uses' => 'InfocastController@mostactive', 'as' => 'ajax.stock.mostactive']);

    /*Response for Market News*/
    Route::post('/ajax/stock/marketnews', ['uses' => 'InfocastController@marketnews', 'as' => 'ajax.stock.marketnews']);

    //test mail
    //Route::get('/mail/test_mail_out', 'EmailController@test_mail_out')->name('email.test_mail_out');
    //Route::get('/mail/test_mail_in', 'EmailController@test_mail_in')->name('email.test_mail_in');

    /*Route for sending enquiry to email*/
    Route::post('/mail/send_enquiry', 'EmailController@send_web_enquiry')->name('email.send_web_enquiry');

    //appointment
    Route::post('/mail/send_appointment', 'EmailController@send_web_appointment')->name('email.send_web_appointment');
    
    /*Static Page inside controller*/
    Route::get('/', ['uses' => 'PageController@homepage', 'as' => 'front.homepage']);
    Route::get('/market-news', ['uses' => 'PageController@marketnews', 'as' => 'front.marketnews']);
    Route::get('/company-news', ['uses' => 'PageController@companynews', 'as' => 'front.companynews']);
    Route::get('/company-structure', ['uses' => 'PageController@companystructure', 'as' => 'front.companystructure']);
    Route::get('/download', ['uses' => 'PageController@download', 'as' => 'front.download']);
    Route::get('/about-us', ['uses' => 'PageController@aboutus', 'as' => 'front.aboutus']);
    Route::get('/appointment', ['uses' => 'PageController@appointment', 'as' => 'front.appointment']);
    Route::get('/contact-us', ['uses' => 'PageController@contactus', 'as' => 'front.contactus']);


    /*Admin Page*/
    /*Route::get('/bjsgadmin/blog', array('as' => 'admin-blog', function () {
        return view('backend.blog');
    }));*/

    Route::resource('bjsgadmin/blog', 'BlogController');

//    Route::post('/server/checkconnectionbyip', 'ServerMonitorController@checkConnectionByIP');

});



