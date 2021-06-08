<?php

use Illuminate\Support\Facades\Route;

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
	return view('welcome');
});

Route::group(['prefix' => 'auth'], function () {
	Route::get('login', 'App\Http\Controllers\AuthController@showLogin');
	Route::get('register', 'App\Http\Controllers\AuthController@showRegister');
});

Route::group(['prefix' => 'u'], function () {
	Route::get('profile', 'App\Http\Controllers\UserController@showProfile');
	Route::get('{id}/{username}', 'App\Http\Controllers\UserController@showUser');
});

Route::group(['prefix' => 'legal/{locale}'], function () {
	Route::get('privacy', function (string $locale) { return view("legal/$locale/privacy"); });
	Route::get('terms', function (string $locale) { return view("legal/$locale/terms"); });
});
