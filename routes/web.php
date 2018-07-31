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

Route::get('/', 'WelcomeController@index')->name('/');

Route::get('login', 'UserLoginController@showLoginForm')->name('user.getLogin');

Route::post('login', 'UserLoginController@login')->name('user.login');

Route::post('logout', 'UserLoginController@logout')->name('user.logout');

Route::middleware(['auth','user'])->group(function () {

    Route::get('/home', 'HomeController@index')->name('home');

});


Route::prefix('administrator/dashboard')->group(function () {

    Auth::routes();

    Route::get('/', 'Auth\LoginController@showLoginForm');


    Route::middleware(['auth', 'admin'])->group(function () {

        Route::get('/index', 'Admin\DashboardController@index')->name('dashboard.index');

    });

});

