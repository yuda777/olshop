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

// Route::get('/', 'ItemsController@index');
// Route::get('/sh', 'ItemsController@sh');
// Route::get('p/{id}', 'ItemsController@show');

// Route::get('/db', 'Users@index');

// Route::resource('products','ProductController');
Route::resource('items','ItemController');
