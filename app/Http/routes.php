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

Route::group(array('prefix'=> 'backend', 'middleware' => 'App\Http\Middleware\AdminMiddleware', 'before' => 'csrf'), function(){

    // Dashboard Products
    Route::group(['prefix' => 'products'], function($router) {
        Route::get('/', ['as' => 'backend.products.index', 'uses' => 'Products@index']);
        Route::get('/create', ['as' => 'backend.products.create', 'uses' => 'Products@create']);
        Route::post('', ['as' => 'backend.products.store', 'uses' => 'Products@store']);
        Route::get('/{products}', ['as' => 'backend.products.show', 'uses' => 'Products@show']);
        Route::get('/{products}/edit', ['as' => 'backend.products.edit', 'uses' => 'Products@edit']);
        Route::put('/{products}', ['as' => 'backend.products.update', 'uses' => 'Products@update']);
        Route::patch('/{products}', ['as' => 'backend.products.update', 'uses' => 'Products@update']);
        Route::delete('/{products}', ['as' => 'backend.products.destroy', 'uses' => 'Products@destroy']);
    });

    // Dashboard Themes
    Route::group(['prefix' => 'themes'], function($router) {
        Route::get('/', ['as' => 'backend.themes.index', 'uses' => 'Themes@index']);
        Route::get('/create', ['as' => 'backend.themes.create', 'uses' => 'Themes@create']);
        Route::post('/', ['as' => 'backend.themes.store', 'uses' => 'Themes@store']);
        Route::get('/{themes}', ['as' => 'backend.themes.show', 'uses' => 'Themes@show']);
        Route::get('/{themes}/edit', ['as' => 'backend.themes.edit', 'uses' => 'Themes@edit']);
        Route::put('/{themes}', ['as' => 'backend.themes.update', 'uses' => 'Themes@update']);
        Route::patch('/{themes}', ['as' => 'backend.themes.update', 'uses' => 'Themes@update']);
        Route::delete('/{themes}', ['as' => 'backend.themes.destroy', 'uses' => 'Themes@destroy']);
    });

    // Dashboard Users
    Route::group(['prefix' => 'users'], function($router) {
        Route::get('/', ['as' => 'backend.users.index', 'uses' => 'Users@index']);
        Route::get('/create', ['as' => 'backend.users.create', 'uses' => 'Users@create']);
        Route::post('/', ['as' => 'backend.users.store', 'uses' => 'Users@store']);
        Route::put('/{users}', ['as' => 'backend.users.update', 'uses' => 'Users@update']);
        Route::patch('/{users}', ['as' => 'backend.users.update', 'uses' => 'Users@update']);
        Route::delete('/{users}', ['as' => 'backend.users.destroy', 'uses' => 'Users@destroy']);
    });
});

Route::group(array('prefix'=> 'backend', 'before' => 'csrf'), function(){
	Route::get('/', ['as' => 'backend', 'uses' => 'Dashboards@index']);

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



