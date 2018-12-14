<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Events\AuctionMade;

//**************************** -- FRONTEND -- *********************************

Route::get('/', 'FrontendController@index')->name('index');

Route::get('/logreg', 'FrontendController@logreg')->name('logreg');

Route::get('/verify', 'FrontendController@verify');

Route::get('/timer', 'FrontendController@timer');

Route::get('/auctions', 'FrontendController@auctions')->name('auctions');

//********* USER UPDATED STUFF

Route::get('/postavke/{id?}', 'FrontendController@postavke')->name('postavke');

Route::post('/users/updateByUser/{id}','RegisterController@updateByUser');



//>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>



//**************************** -- AUCTIONS -- ************************************

Route::get('/auctions/{id}', 'AuctionController@show')->name('auctionSingle');

Route::post('/auctions/{id}/offer', 'AuctionController@offer')->name('offerMade');

//>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>



//*************************** -- LOGIN & REGISTER -- ***************************

Route::get('/logout', 'LoginController@logout')->name('logout');

Route::post('/register', 'RegisterController@store')->name('register');

Route::get('/user/verify/{token}', 'RegisterController@verifyUser');

//>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>



//************************* -- LOGIN UNDER MIDDLEWARE --**********************

Route::group(['middleware' => 'login'], function (){

    Route::post('/login', 'LoginController@login')->name('login');

});

//>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>



//************************ -- ADMIN PANEL UNDER MIDDLEWARE --*****************

Route::group(['middleware' => 'admin'], function () {

    Route::get('/admin_panel', 'FrontendController@admin_panel')->name('admin_panel');

    Route::get('/users/{id?}', 'RegisterController@show');

    Route::get('/users/destroy/{id}','RegisterController@destroy');

    Route::post('/users/store', 'RegisterController@storeWithChosenRole');

    Route::post('/users/update/{id}','RegisterController@update');

    Route::get('/admin_auctions', 'FrontendController@auctionForm');

    Route::post('/auctions/store', 'AuctionController@store');

    Route::get('/admin_auctions_show', 'AuctionController@showForAdmin');

    Route::get('/auction/destroy/{id}', 'AuctionController@destroy');

});

//>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>



//Route::get('/adminp', function (){ return view('pages.adminp');});
