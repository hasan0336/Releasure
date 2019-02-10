<?php
use Illuminate\Http\Request;
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
Route::get('/sales','HomeController@sales')->name('sales');
Route::get('/purchases','HomeController@purchases')->name('purchases');
//Route::get('/payment','HomeController@payment')->name('payment');
Route::get('/payment', function () {
//    dd(454545);
    $gateway = new Braintree\Gateway([
        'environment' => config('services.braintree.environment'),
        'merchantId' => 'wyj8zg78h24csmdy',
        'publicKey' => 'tkbm8cfzj66thgjs',
        'privateKey' => '01843636837d3d895354e1636eae84d5'
    ]);
//    dd($gateway);
    $token = $gateway->ClientToken()->generate();
    return view('payment', [
        'token' => $token
    ]);
})->name('payment');

Route::post('/checkout', 'PurchaseController@checkout')->name('checkout');


Route::get('/hosted','PurchaseController@hosted')->name('hosted');


Route::get('/messages','HomeController@messages')->name('messages');
Route::get('register/verify/{token}', 'Auth\RegisterController@verify')->name('verified_email');
Route::get('forgot_password','HomeController@forget_password')->name('forget_password');
Route::post('user_forgot_password','UserController@forgot_user_password')->name('forgot_user_password');
Route::get('change_password/{user_id}','UserController@change_password')->name('change_password');
Route::get('reset_password','HomeController@reset_password')->name('reset_password');
Route::post('change_user_password','UserController@change_user_password')->name('change_user_password');
Route::post('update_user_profile','UserController@update_user_profile')->name('update_user_profile');
Route::post('get_month_year','HomeController@get_month_year')->name('get_month_year');
Route::post('post_data','PostController@post_data')->name('post_data');
Route::get('social_signup','Auth\RegisterController@social_signup')->name('social_signup');
Route::post('social_signup_details','Auth\RegisterController@social_signup_details')->name('social_signup_details');
Route::get('login/{social}', 'Auth\LoginController@redirectToProvider')->where('social','facebook|google|linkedin');
Route::get('login/{social}/callback', 'Auth\LoginController@handleProviderCallback')->where('social','facebook|google|linkedin');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');


