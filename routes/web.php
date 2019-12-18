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
//     return view('Index');
// });

Route::get('/Index', 'MyController@index');

Route::get('/Shop','MyController@shop');

Route::get('/Detail/','MyController@detail');

Route::get('/Pay','MyController@pay'); 

Route::get('/Cart','MyController@cart');

Route::get('/login','MyController@login');

