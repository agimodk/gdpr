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

// LANGUAGE SWITCH
Route::get('/locale/{lang}', 'LanguagesController@changeLanguage');

// GET REQUESTS
Route::get('/', 'PagesController@index');
Route::get('/data-protection-officer', 'PagesController@dpo');
Route::get('/cookies', 'PagesController@cookies');
Route::get('/copyright', 'PagesController@copyright');
Route::get('/rectification', 'PagesController@rectification');
Route::get('/disclaimer', 'PagesController@disclaimer');
Route::get('/forget-me', 'PagesController@forget');
Route::get('/imprint', 'PagesController@imprint');
Route::get('/media-credits', 'PagesController@media');
Route::get('/request-data', 'PagesController@data');
Route::get('/access-data', 'PagesController@access');
Route::get('/privacy-policy', 'PagesController@privacy');
Route::get('/privacy-settings', 'PagesController@settings');
Route::get('/terms-and-conditions', 'PagesController@terms');
Route::get('/unsubscribe', 'PagesController@unsubscribe');
Route::get('/data-restriction', 'PagesController@restriction');

// POST REQUESTS
Route::post('/data-protection-officer', 'PagesController@dpoSendEmail');
Route::post('/rectification', 'PagesController@rectificationSendEmail');
Route::post('/forget-me', 'PagesController@forgetSendEmail');
Route::post('/dcma', 'PagesController@dcmaSendEmail');
Route::post('/request-data', 'PagesController@dataSendEmail');
Route::post('/access-data', 'PagesController@accessSendEmail');
Route::post('/unsubscribe', 'PagesController@unsubscribeSendEmail');
Route::post('/data-restriction', 'PagesController@restrictionSendEmail');

// MODAL OFFER
Route::post('/offer', 'PagesController@offer');

// AUTHENTICATION
/* Logout modal won't open due to missing app.js file replaced by clean jQuery */
// Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');
