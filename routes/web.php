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

//Route::get('/', function () {
//    $total = 10+12;
////    return view('welcome');
//    return view('welcome', compact('total'));
//});

//public function auth()
//{
    // Authentication Routes...
    $this->get('/', 'Auth\LoginController@showLoginForm')->name('login');
    $this->post('login', 'Auth\LoginController@login');
    $this->post('logout', 'Auth\LoginController@logout')->name('logout');

    // Registration Routes...
    $this->get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
    $this->post('register', 'Auth\RegisterController@register');

    // Password Reset Routes...
    $this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
    $this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    $this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
    $this->post('password/reset', 'Auth\ResetPasswordController@reset');
//}

Route::get('/login2', 'analyticsController@Login');
Route::get('/index', 'analyticsController@analytics')->name('index');
//Route::get('/testing', 'analyticsController@getSensorValues')->name('eeeeeeeee');
//Route::get('/Login', 'analyticsController@Login');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('index', [
//    'middleware' => 'auth',
    'uses' => 'analyticsController@analytics'
]);

Route::get('/create_greenhouse', 'GreenhouseController@index')->name('create_greenhouse');
Route::get('/create_greenhouse/add', 'GreenhouseController@createGreenHouse');
//Route::get('/testing', 'GreenhouseController@getDeviceCount');
Route::get('/testing', 'GreenhouseController@ReceiveDataForm');
//Route::post('/testing', 'GreenhouseController@ReceiveDataForm');
