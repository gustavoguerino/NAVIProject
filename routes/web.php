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

Route::get( 'infos/personal', 'InfosController@GetInfoPersonal')->name('formPersonal');
Route::get( 'infos/address', 'InfosController@GetInfoAddress')->name('formAddress');
Route::post( 'infos/personal', 'InfosController@UpdateInfoPersonal')->name('formPersonalPost');
Route::post( 'infos/address', 'InfosController@UpdateInfoAddress')->name('formAddressPost');