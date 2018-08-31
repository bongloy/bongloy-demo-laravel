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

Route::get('/', [
    'uses' => 'ChargesController@create',
    'as' => 'charge.create'
]);

Route::post('charges', [
    'uses' => 'ChargesController@store',
    'as' => 'charge.store'
]);

Route::post("charge", "ChargesController@charge");
