<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use App\product;
use Illuminate\Http\Request;

Route::group(['middleware'=>'web'],function(){
	Route::auth();
	
	Route::get('/', [
		'uses' => 'adminController@getProduct',
		'as' => 'shop.index'
	]);

	
	Route::get('deleteProducts/{id}','adminController@delete');
	Route::get('home', 'HomeController@index');
});

	Route::get('admin', 'adminController@getIndex')->middleware('isAdmin');
	Route::get('form', 'adminController@addProducts')->middleware('isAdmin');
	Route::post('store','adminController@store'
	)->middleware('isAdmin');

	Route::post('update', 'adminController@update');
	Route::get('deleteProducts/{id}', 'adminController@delete');

	Route::get('editProducts/{id}', 'adminController@edit');

	