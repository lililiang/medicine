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

Route::get('/', function () {
    return redirect('/home');
});

// 登陆认证
// Route::post('/auth/login', 'Auth\AuthController@postLogin');
// Route::get('/auth/logout', 'Auth\AuthController@getLogout');

Route::get('/list', 'MedicineController@list');
Route::get('/detail/{ma_id}', 'MedicineController@showAnagraph');
Route::get('/edit/{ma_id}', 'MedicineController@editAnagraph');
Route::post('/doedit', 'MedicineController@doEditAnagraph');

Route::get('/add', function () {
    return view('medicine.add');
});

Route::post('/create', 'MedicineController@createAnagraph');
Auth::routes();

Route::get('/home', 'HomeController@index');
