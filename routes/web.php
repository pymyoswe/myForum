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

Route::get('about-forum', 'WelcomeController@aboutForum')->name('about-forum');

Route::get('call-for-paper', 'WelcomeController@callForPaper')->name('call-for-paper');

Route::get('important-date', 'WelcomeController@importantDate')->name('important-date');

Route::get('registration-fee', 'WelcomeController@registrationFee')->name('registration-fee');

Route::get('login', 'UserLoginController@showLoginForm')->name('user.getLogin');

Route::post('login', 'UserLoginController@login')->name('user.login');

Route::post('logout', 'UserLoginController@logout')->name('user.logout');

Route::middleware(['auth','user'])->group(function () {

    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('proposal-session', 'ProposalController@index')->name('proposal-session');

    // Download Route
    Route::get('download/{filename}','ProposalController@download')->name('proposal-download');

});


Route::prefix('administrator/dashboard')->group(function () {

    Auth::routes();

    Route::get('/', 'Auth\LoginController@showLoginForm');


    Route::middleware(['auth', 'admin'])->group(function () {

        Route::get('/index', 'Admin\DashboardController@index')->name('dashboard.index');

        Route::resource('users', 'Admin\UserController', ['as' => 'dashboard']);

        Route::resource('proposal', 'Admin\ProposalController', ['as' => 'dashboard']);

        Route::resource('proposalType', 'Admin\ProposalTypeController', ['as' => 'dashboard']);

    });

});

