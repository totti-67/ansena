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

Route::get('/', function () {
    return view('user.home');
});

Route::group(['prefix' => 'user'], function() {
    Route::get('home', 'Admin\AnsenaController@home');
    Route::get('about', 'Admin\AnsenaController@about');
    Route::get('topics','Admin\AnsenaController@topics');
    Route::get('menu1','Admin\AnsenaController@menu1');
    Route::get('menu2','Admin\AnsenaController@menu2');
    Route::get('menu3','Admin\AnsenaController@menu3');
    Route::get('menu4','Admin\AnsenaController@menu4');
    Route::get('menu5','Admin\AnsenaController@menu5');
    Route::get('menu6','Admin\AnsenaController@menu6');
    Route::get('menu7','Admin\AnsenaController@menu7');
    Route::get('menu8','Admin\AnsenaController@menu8');
    Route::get('menu9','Admin\AnsenaController@menu9');
    Route::get('menu10','Admin\AnsenaController@menu10');
    Route::get('menu11','Admin\AnsenaController@menu11');
    
});