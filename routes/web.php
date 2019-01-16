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
    return view('index');
});

Auth::routes();

Route::get('/index', 'HomeController@index')->name('index');
Route::get('/login_user','HomeController@login_user')->name('login_user');
Route::get('/home','HomeController@home_user')->name('home');
Route::get('/signup_user','HomeController@signup_user')->name('signup_user');
Route::get('/featured_artist','HomeController@featured_artist')->name('featured_artist');
Route::get('/purchases','HomeController@purchases')->name('purchases');
Route::get('register/verify/{token}', 'Auth\RegisterController@verify')->name('verified_email');
Route::get('forgot_password','HomeController@forget_password')->name('forget_password');
Route::post('user_forgot_password','UserController@forgot_user_password')->name('forgot_user_password');
Route::get('change_password/{user_id}','UserController@change_password')->name('change_password');
Route::get('reset_password','HomeController@reset_password')->name('reset_password');
Route::post('change_user_password','UserController@change_user_password')->name('change_user_password');
Route::post('post_data','PostController@post_data')->name('post_data');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');

