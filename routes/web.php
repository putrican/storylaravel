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
    return view('welcome');
});


Route::get('/', 'BagianController@index')->middleware('auth');
Route::resource('bagians', 'BagianController')->middleware('auth');
// Route::get('/bagians/{bagian}', 'BagianController@show')->name('bagians.show')->middleware('auth')->middleware('can:view,bagian');
Route::resource('/sistem', 'SistemController');
Route::resource('/mahasiswas', 'MahasiswaController');

Route::get('/test', 'TestController@index');
Route::get('/admins', 'RoleController@index');
Route::get('/wisata', 'WisataController@index');
Route::get('/page/getprovince', 'PageController@getprovince');
Route::get('/page/getcity', 'PageController@getcity');
Route::get('/page/checkshipping', 'PageController@checkshipping');
Route::post('/page/prosesshipping', 'PageController@processhipping');





Route::resource('/admin', 'AdminController');







Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
