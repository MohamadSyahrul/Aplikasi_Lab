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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('register','Api\Auth\AuthController@register');
Route::post('login','Api\Auth\AuthController@login');

Route::group(['prefix' => 'tugas'], function () {
    Route::group(['middleware' => 'auth:api'], function () {
        Route::get('get_all', 'Api\Tugas\TugasController@getAll');
        Route::post('tambah', 'Api\Tugas\TugasController@store');
        Route::post('update', 'Api\Tugas\TugasController@update');
        Route::post('delete', 'Api\Tugas\TugasController@destroy');

        Route::post('create', 'Api\Tugas\MenuController@store');
        Route::post('edit', 'Api\Tugas\MenuController@update');
        Route::post('hapus', 'Api\Tugas\MenuController@destroy');

    });
});