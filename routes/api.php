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

Route::post('/register', 'Api\AuthController@register');
Route::post('/login', 'Api\AuthController@login');

Route::group(['middleware' => 'auth:api'], function () {
    Route::get('/get-berita', 'API\BeritaController@berita');
    Route::get('/get-profil', 'API\ProfileController@profile');
    Route::get('/pengundurandiri', 'API\ProfileController@pengunduran');
    Route::post('/update-profil', 'API\ProfileController@updateprofile');
    Route::get('/get-kegiatan', 'API\KegiatanController@kegiatan');
    Route::get('/get-struktur', 'API\ProfileController@struktur');
});
