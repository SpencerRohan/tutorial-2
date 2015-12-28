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

Route::get('/', "Productlines@index");
Route::get('coyote-reboot/{code?}', "Productlines@index");

// Dashboard Admin
Route::get('backend', "Dashboards@index");

// Themes Admin
Route::group(array('prefix'=> 'backend', 'before' => 'csrf'), function(){
    Route::resource('products' , 'Products');
    Route::resource('themes' , 'Themes' );

	// Authentication routes...
	Route::get('login', ['as' => 'backend.login', 'uses' => 'Auth\AuthController@getLogin']);
	Route::post('login', ['as' => 'backend.login', 'uses' => 'Auth\AuthController@postLogin']);
	Route::get('logout', ['as' => 'backend.logout', 'uses' => 'Auth\AuthController@getLogout']);

	// Registration routes...
	Route::get('register', ['as' => 'backend.register', 'uses' => 'Auth\AuthController@getRegister']);
	Route::post('register', ['as' => 'backend.register', 'uses' => 'Auth\AuthController@postRegister']);
});

Route::controllers([
   'password' => 'Auth\PasswordController',
]);

Route::get('home', function(){
	return Redirect::to('backend');
});
