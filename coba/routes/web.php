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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route halaman utama
Route::get('/', 'HomeController@index');

// Route halaman register
Route::get('/register', 'AuthController@register');

// Route halaman welcome
Route::post('/welcome', 'AuthController@welcome'); 
