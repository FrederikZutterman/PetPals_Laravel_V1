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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//  Show the account information
Route::get('/profile/account', 'ProfileAccountController@edit');
//  Update the account information
Route::post('profile/account', 'ProfileAccountController@update')->name('profile.update');

//  Show the account-settings information
Route::get('/profile/account/settings', 'ProfileAccountController@settings');
