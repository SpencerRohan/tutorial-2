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


// Products Admin
Route::group(array('prefix'=> 'backend', 'before' => 'csrf'), function(){
    Route::resource('products' , 'Products');
});

// Themes Admin
Route::group(array('prefix'=> 'backend', 'before' => 'csrf'), function(){
    Route::resource('themes' , 'Themes' );
});


// Authentication routes...
Route::get('backend/login', 'Auth\AuthController@getLogin');
Route::post('backend/login', 'Auth\AuthController@postLogin');
Route::get('backend/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('backend/register', 'Auth\AuthController@getRegister');
Route::post('backend/register', 'Auth\AuthController@postRegister');


Route::controllers([
   'password' => 'Auth\PasswordController',
]);

Route::get('home', function(){
	return Redirect::to('backend');
});
