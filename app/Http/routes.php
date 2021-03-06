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

Route::get('dashboard', 'DashboardController@index');

Route::get('/', 'WelcomeController@index');

Route::get('dash', 'GithubAuthController@handleProviderCallback');

Route::get('home', 'HomeController@index');

Route::get('cart', 'DevCartController@index');

Route::get('shop', 'DevShopController@index');

Route::get('login', ['as' => 'login_path', 'uses' => 'GithubAuthController@login']);

Route::get('foxyapi/login', ['as' => 'foxyapi/login', 'uses' => 'FoxyApiController@redirectToProvider']);

Route::get('foxyapi_callback', ['as' => 'foxyapi', 'uses' => 'FoxyApiController@handleProviderCallback']);

Route::controllers([
    'auth'     => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);
