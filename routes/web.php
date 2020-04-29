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

Route::get('/ddpo', function () {
    return view('ddpo');
})->name('ddpo');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/distributer', 'HomeController@distributer')->name('distributer');
Route::get('/powdb', 'HomeController@powdb')->name('powerdashboard');
Route::get('/ngo-login', 'HomeController@ngo_login')->name('ngo-login');
Route::get('/report', 'HomeController@reportDashboard')->name('report');
Route::get('/custom-logout', 'HomeController@customLogout')->name('custom-logout');
Route::get('{path}','HomeController@index')->where( 'path', '([A-z]+)?' );
