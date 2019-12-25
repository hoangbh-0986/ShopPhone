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

Route::get('/index/', 'MyController@index')->name('index');

Route::get('/shop/','MyController@shop')->name('shop');

Route::get('/detail/{id}','MyController@detail')->name('detail');

Route::get('/pay/','MyController@pay')->name('pay'); 

Route::get('/cart/','MyController@cart')->name('cart');

Route::get('/login','LoginController@getlogin')->name('login');
Route::post('/login','LoginController@postLogin')->name('login');

Route::get('/login','LoginController@logout')->name('logout');

Route::get('/productByManufacturer/{ma}','MyController@probyManu');

Route::get('/registrantion','LoginController@getRegistration')->name('registration');
Route::post('/registrantion','LoginController@postRegistration')->name('registrantion');

Route::post('search/name', 'MyController@getSearchAjax')->name('search');