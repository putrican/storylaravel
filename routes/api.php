<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
// Route::get('/data', function(){
//     return "SELAMAT DATANG";
// });



Route::post('/create-product', 'KlinikController@create');
Route::get('/read-product', 'KlinikController@index');
Route::get('/read-product/{id}', 'KlinikController@show');
Route::get('/search-product', 'KlinikController@search');
Route::patch('/update-product/{id}', 'KlinikController@update');
Route::delete('/delete-product/{id}', 'KlinikController@delete');
