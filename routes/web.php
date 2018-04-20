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

Route::get('/', ['as'=> 'inicio', 'uses' => 'DogsController@Inicio']);
Route::get('register', ['as'=> 'dog.register', 'uses' => 'DogsController@Register']);
Route::post('register', ['as'=> 'dog.store', 'uses' => 'DogsController@Store']);
Route::get('dogimage/{image}', 'DogsController@getimage')->name('dogimage');
Route::get('show/{id}', 'DogsController@show')->name('show');
Route::get('search', 'DogsController@search')->name('search');
Route::get('paises', 'DogsController@paises')->name('paises');
Route::get('pais/{id}', 'DogsController@pais')->name('pais');
Route::post('payment', array(
	'as' => 'payment',
	'uses' => 'PaypalController@postPayment',
));
Route::get('payment/status', array(
	'as' => 'payment.status',
	'uses' => 'PaypalController@getPaymentStatus',
));
