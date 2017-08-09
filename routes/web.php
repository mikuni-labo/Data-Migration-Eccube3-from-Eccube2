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

Route::get('/',         'Controller@welcome');

Route::get('/product',  'Migration\ProductController@index');
Route::get('/customer', 'Migration\CustomerController@index');
Route::get('/order',    'Migration\OrderController@index');
