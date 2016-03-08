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

// Route::get('/', array('as' => 'under-maintenance', function () {
//     return view('frontend.maintenance');
// }));

Route::get('/', array('as' => 'front-homepage', function () {
    return view('frontend.index');
}));

Route::get('/market-news', array('as' => 'front-marketnews', function () {
    return view('frontend.marketnews');
}));

Route::get('/company-structure', array('as' => 'front-structure', function () {
    return view('frontend.structure');
}));

Route::get('/download', array('as' => 'front-download', function () {
    return view('frontend.download');
}));

Route::get('/about-us', array('as' => 'front-aboutus', function () {
    return view('frontend.aboutus');
}));

Route::get('/contact-us', array('as' => 'front-contactus', function () {
    return view('frontend.contactus');
}));

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
