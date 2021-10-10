<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/sanctum/csrf-cookie', function (Request $request) {
    /*
     * Set xsrf cookie for login
     */
    return response()->json();
});
Route::get('/auth-check', 'Auth\LoginController@checkIsAuthenticated');

Route::post('/login','Auth\LoginController@login');
Route::get('/logout', 'Auth\LoginController@logout');

Route::post('ktm/search','UnduhKtmController@search');
Route::post('ktm/download', 'UnduhKtmController@downloadKtm');
Route::post('ktm/cleartemp', 'UnduhKtmController@clearTemp');
Route::get('berita/list', 'BeritaController@list');
Route::post('berita/publish', 'BeritaController@publishSetting');
Route::get('berita/edit/{id}', 'BeritaController@edit');
Route::get('berita/tambah', 'BeritaController@create');
Route::post('berita', 'BeritaController@store');
Route::post('berita/{id}', 'BeritaController@update');
Route::delete('berita/{id}', 'BeritaController@destroy');

Route::get('event/list', 'EventController@list');
Route::delete('event/{id}', 'EventController@destroy');
Route::get('event/edit/{id}', 'EventController@edit');
Route::get('event/tambah', 'EventController@create');
Route::post('event', 'EventController@store');
Route::post('event/{id}', 'EventController@update');
Route::delete('event/{id}', 'EventController@destroy');


