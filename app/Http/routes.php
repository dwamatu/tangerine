<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::group(['middleware'=> ['web']],function (){

    Route::get('/', function () {
        return view('welcome');
    })->name('home');

    Route::get('/addclient', function () {
        return view('addclient');
    })->name('add.client');

    Route::get('/book', function () {
        return view('book');
    })->name('book.site');

    Route::post('/signup', ['uses' => 'UserController@postSignUp', 'as' => 'signup']);

    Route::post('/signin', ['uses' => 'UserController@postSignIn', 'as' => 'signin']);

    Route::get('/dashboard', ['uses' => 'SiteController@getDashboard', 'as' => 'dashboard', 'middleware' => 'auth']);

    Route::get('/logout', ['uses' => 'UserController@getLogout', 'as' => 'logout']);

    Route::get('/clientdashboard', ['uses' => 'ClientController@getClientDashboard', 'as' => 'client.dashboard', 'middleware' => 'auth']);

    Route::get('/booked', function () {
        return view('booked');
    })->name('booked.site');

    Route::get('/closed', function () {
        return view('closed');
    })->name('closed.site');

    Route::post('/createsite', ['uses' => 'SiteController@siteCreateSite', 'as' => 'site.create']);

    Route::post('/editsite', ['uses' => 'SiteController@siteEditSite', 'as' => 'edit.site']);

    Route::post('/createclient', ['uses' => 'ClientController@clientCreateClient', 'as' => 'create.client']);


});