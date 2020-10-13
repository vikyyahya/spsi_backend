<?php

use Illuminate\Support\Facades\Route;

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
})->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/users', 'UserController@user');
Route::get('/adduser', 'UserController@adduser');
Route::get('/edituser/{id}', 'UserController@editUser');
Route::post('/upadateuser/{id}', 'UserController@update');
Route::post('/createuser', 'UserController@create');
Route::get('/user/{id}/delete', 'UserController@delete');

//berita
Route::get('/berita', 'BeritaController@index')->name('home');
Route::get('/tambahberita', 'BeritaController@tambah_berita');
Route::post('/createberita', 'BeritaController@create');
//kegiatan
Route::get('/kegiatan', 'KegiatanController@index');
//struktur organisasi
Route::get('/struktur', 'StrukturController@index');
