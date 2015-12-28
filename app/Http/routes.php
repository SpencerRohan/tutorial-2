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
    Route::get('/products', ['as' => 'backend.products.index', 'uses' => 'Products@index']);
    Route::get('/products/create', ['as' => 'backend.products.create', 'uses' => 'Products@create']);
    Route::post('/products', ['as' => 'backend.products.store', 'uses' => 'Products@store']);
    Route::get('/products/{products}', ['as' => 'backend.products.show', 'uses' => 'Products@show']);
    Route::get('/products/{products}/edit', ['as' => 'backend.products.edit', 'uses' => 'Products@edit']);
    Route::put('/products/{products}', ['as' => 'backend.products.update', 'uses' => 'Products@update']);
    Route::patch('/products/{products}', ['as' => 'backend.products.update', 'uses' => 'Products@update']);
    Route::delete('/products/{products}', ['as' => 'backend.products.destroy', 'uses' => 'Products@destroy']);

    // Dashboard Themes
    Route::get('/themes', ['as' => 'backend.themes.index', 'uses' => 'Themes@index']);
    Route::get('/themes/create', ['as' => 'backend.themes.create', 'uses' => 'Themes@create']);
    Route::post('/themes', ['as' => 'backend.themes.store', 'uses' => 'Themes@store']);
    Route::get('/themes/{themes}', ['as' => 'backend.themes.show', 'uses' => 'Themes@show']);
    Route::get('/themes/{themes}/edit', ['as' => 'backend.themes.edit', 'uses' => 'Themes@edit']);
    Route::put('/themes/{themes}', ['as' => 'backend.themes.update', 'uses' => 'Themes@update']);
    Route::patch('/themes/{themes}', ['as' => 'backend.themes.update', 'uses' => 'Themes@update']);
    Route::delete('/themes/{themes}', ['as' => 'backend.themes.destroy', 'uses' => 'Themes@destroy']);

    // Dashboard Users
    Route::get('/users', ['as' => 'backend.users.index', 'uses' => 'Users@index']);
    Route::put('/users/{users}', ['as' => 'backend.users.update', 'uses' => 'Users@update']);
    Route::patch('/users/{users}', ['as' => 'backend.users.update', 'uses' => 'Users@update']);
    Route::delete('/users/{users}', ['as' => 'backend.users.destroy', 'uses' => 'Users@destroy']);
});

Route::group(array('prefix'=> 'backend', 'before' => 'csrf'), function(){
	Route::get('/', "Dashboards@index");

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
