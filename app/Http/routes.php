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

Route::post('/mail/send_enquiry', 'EmailController@send_web_enquiry')->name('email.send_web_enquiry');

Route::group(['middleware' => ['web']], function () {
    /*Infocast API for Index*/
    /*API CALL*/

    Route::post('/ajax/stock/mostactive', ['uses' => 'InfocastController@mostactive', 'as' => 'ajax.stock.mostactive']);

    /*Response for Market News*/
    Route::post('/ajax/stock/marketnews', ['uses' => 'InfocastController@marketnews', 'as' => 'ajax.stock.marketnews']);

    //test mail
    //Route::get('/mail/test_mail_out', 'EmailController@test_mail_out')->name('email.test_mail_out');
    //Route::get('/mail/test_mail_in', 'EmailController@test_mail_in')->name('email.test_mail_in');

    
    /*Static Page inside controller*/
    Route::get('/', ['uses' => 'PageController@homepage', 'as' => 'front.homepage']);
    Route::get('/market-news', ['uses' => 'PageController@marketnews', 'as' => 'front.marketnews']);
    Route::get('/company-structure', ['uses' => 'PageController@companystructure', 'as' => 'front.companystructure']);
    Route::get('/download', ['uses' => 'PageController@download', 'as' => 'front.download']);
    Route::get('/about-us', ['uses' => 'PageController@aboutus', 'as' => 'front.aboutus']);
    Route::get('/contact-us', ['uses' => 'PageController@contactus', 'as' => 'front.contactus']);

    /*Route for sending enquiry to email*/
//    Route::post('/mail/send_enquiry', 'EmailController@send_web_enquiry')->name('email.send_web_enquiry');

    /*Admin Page*/
//    Route::get('/server/monitor', 'ServerMonitorController@index')->name('server-monitor');
//    Route::get('/server/checkserverstatus', 'ServerMonitorController@checkServerStatus')->name('server-status');

/*    Route::get('/test', array('as' => 'admin-homepage', function () {
        return view('backend.test');
    }));*/
//    Route::post('/server/checkconnectionbyip', 'ServerMonitorController@checkConnectionByIP');

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
    //
});
