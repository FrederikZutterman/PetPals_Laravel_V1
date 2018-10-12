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

/**
 * ProfileController
 */
Route::get('/profile', 'ProfileController@profileRoot')->name('profile.root');
Route::get('/profile/dashboard', 'ProfileController@dashboard')->name('profile.dashboard');

Route::get('/profile/add/shelter/step-1', 'ProfileController@createStep1')->name('createStep1');
Route::post('/profile/add/shelter/step-1', 'ProfileController@postCreateStep1')->name('postCreateStep1');
//Route::get('/profile/add/shelter/step-2', 'ProfileController@addShelterStepTwo')->name('addShelterStepTwo');
//Route::post('profile/add/shelter/step-3', 'ProfileController@create')->name('profile.validate.shelter');

//  Go To Adminpanel of Shelter
Route::get('/admin/shelter', 'AdminController@showAdminShelter')->name('visitAdminShelter');
Route::get('/admin/shelter/dashboard', 'AdminController@showAdminShelterDashboard')->name('visitAdminShelterDashboard');

/**
 * ProfileAccountController
 */

//  Account

//  Show the account information
Route::get('/profile/account', 'ProfileAccountController@edit');
//  Update the account information
Route::post('profile/account', 'ProfileAccountController@update')->name('profile.update');

//  Account Settings

//  Show the account-settings information
Route::get('/profile/account/settings', 'ProfileAccountController@settings');