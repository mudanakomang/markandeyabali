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

Route::post('/admin/login','Auth\LoginController@login');
Route::get('/logout', 'Auth\LoginController@logout');

Route::post('ktm/search','UnduhKtmController@search');
Route::post('ktm/download', 'UnduhKtmController@downloadKtm');
Route::post('ktm/cleartemp', 'UnduhKtmController@clearTemp');
