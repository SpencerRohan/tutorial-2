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

// Route::get('coyote-reboot', function () {
//     return view('products.index');
// });

// Route::get('coyote-reboot/anvil', function () {
//     return view('products.index');
// });


Route::resource('coyote-reboot', 'Product');