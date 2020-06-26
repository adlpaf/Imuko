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

// Route::get('/', function () {
//     return view('home');
// })->middleware('auth');

Route::get('/', 'ClientController@index')->middleware('auth');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'ClientController@index')->name('home');

Route::group(['middleware' => ['auth']], function () {
    Route::resource('client', 'ClientController');
    Route::resource('city',   'CityController');
    Route::resource('user',   'UserController');
});

// E-mail verification
Route::get('/register/verify/{email}', 'ConfirmeController@setPassword');
Route::post('/register/update',        'ConfirmeController@updatePassword');
