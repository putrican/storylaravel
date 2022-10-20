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


Route::get('/join', 'JoinController@join');
Route::post('/join', 'JoinController@prosesJoin');
Route::get('/logout', 'JoinController@logout');
Route::redirect('/', '/join');
// Route:: get('/admin1', 'JoinController@admin1');
Route::get('/course', 'CourseController@index' );
Route::get('/mentor', 'MentorController@index' );




Route::resource('/admin', 'AdminController');
Route:: get('/admin1', 'Admin1Controller@index')->name('admin1.index');

Auth::routes();


Route::get('/homes', function () {
    return view('homes',[
        "title" => "Homes"
    ]);
});

