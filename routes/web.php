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

Route::get('/', 'ClientController@index')->name('home');
Route::get('clients/create' , 'ClientController@create')->name('clients.create');
Route::get('clients/{client}' , 'ClientController@show')->name('clients.show');
Route::get('clients/{client}/edit' , 'ClientController@edit')->name('clients.edit');
Route::put('clients/{client}' , 'ClientController@update')->name('clients.update');
Route::delete('clients/{client}' , 'ClientController@destroy')->name('clients.destroy');
Route::post('clients' , 'ClientController@store')->name('clients.store');


Route::get('clients' , 'ClientController@lister')->name('clients.lister');


// Route::resource('clients', 'ClientController');
