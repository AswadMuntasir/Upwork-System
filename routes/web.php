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
Route::get('/home', 'homecontroller@index')->name('home.index');
Route::post('/home', 'homecontroller@search1');

Route::get('/home/login', 'LoginController@index')->name('login.index');
Route::post('/home/login', 'LoginController@verify');

Route::get('/home/search', 'homecontroller@search')->name('home.search');

Route::get('/home/searchjob', 'homecontroller@searchjob')->name('home.searchjob');

Route::get('/home/fl', 'homecontroller@fl')->name('home.fl');

Route::get('/home/job', 'homecontroller@job')->name('home.job');

Route::get('/home/livesearch', 'homecontroller@livesearch')->name('home.livesearch');
//Route::post('/home/search', 'homeController@searchsupport');
Route::get('/home/livejobsearch', 'homecontroller@livejobsearch')->name('home.livejobsearch');

Route::get('/home/registration', 'registrationcontroller@index')->name('registration.index');
Route::post('/home/registration', 'registrationcontroller@signuppost');

Route::group(['middleware'=>['sess']], function(){

Route::get('/home/registration2', 'registrationcontroller@signup2')->name('registration.index2');
Route::post('/home/registration2', 'registrationcontroller@signuppost2');

Route::get('/home/registration3', 'registrationcontroller@signup3')->name('registration.index3');
Route::post('/home/registration3', 'registrationcontroller@signuppost3');

});

Route::get('/home/webMobSofDevQuotes', 'homecontroller@b1')->name('quotes.webMobSofDevQuotes');
Route::post('/home/webMobSofDevQuotes', 'homecontroller@b1support');

Route::get('/home/designCreativeWorkQuotes', 'homecontroller@b2')->name('quotes.designCreativeWorkQuotes');
Route::post('/home/designCreativeWorkQuotes', 'homecontroller@b2support');

Route::get('/home/writingQuotes', 'homecontroller@b3')->name('quotes.writingQuotes');
Route::post('/home/writingQuotes', 'homecontroller@b3support');

Route::get('/home/salesMarketingQuotes', 'homecontroller@b4')->name('quotes.salesMarketingQuotes');
Route::post('/home/salesMarketingQuotes', 'homecontroller@b4support');

Route::get('/home/adminSupportQuotes', 'homecontroller@b5')->name('quotes.adminSupportQuotes');
Route::post('/home/adminSupportQuotes', 'homecontroller@b5support');

Route::get('/home/customerServiceQuotes', 'homecontroller@b6')->name('quotes.customerServiceQuotes');
Route::post('/home/customerServiceQuotes', 'homecontroller@b6support');

Route::get('/home/dataScienceAnalyticsQuotes', 'homecontroller@b7')->name('quotes.dataScienceAnalyticsQuotes');
Route::post('/home/dataScienceAnalyticsQuotes', 'homecontroller@b7support');

Route::get('/home/engineeringArchitectureQuotes', 'homecontroller@b8')->name('quotes.engineeringArchitectureQuotes');
Route::post('/home/engineeringArchitectureQuotes', 'homecontroller@b8support');


Route::get('/home/webdev', 'homecontroller@webdetails')->name('home.webdev');
Route::post('/home/webdev', 'homecontroller@webreg');

Route::get('/home/mobiledev', 'homecontroller@mobiledetails')->name('home.mobiledev');
Route::post('/home/mobiledev', 'homecontroller@mobilereg');