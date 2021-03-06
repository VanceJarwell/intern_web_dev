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

Route::get('/', 'LoginController@index');
Route::get('/home', 'MainController@index');
Route::get('/search', 'SearchController@index');
Route::get('/borrow', 'BorrowController@index');
Route::get('/return', 'ReturnController@index');