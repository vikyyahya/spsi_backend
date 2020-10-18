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
Route::get('/berita/{id}/delete', 'BeritaController@delete');

Route::get('/tambahberita', 'BeritaController@tambah_berita');
Route::post('/createberita', 'BeritaController@create');
//kegiatan
Route::get('/kegiatan', 'KegiatanController@index');
Route::get('/tambahkegiatan', 'KegiatanController@tambah_kegiatan');
Route::post('/createkegiatan', 'KegiatanController@create');
Route::get('/kegiatan/{id}/delete', 'KegiatanController@delete');



//struktur organisasi
Route::get('/struktur', 'StrukturController@index');
Route::get('/tambahstruktur', 'StrukturController@tambah_struktur');
Route::post('/createstruktur', 'StrukturController@create');
Route::get('/struktur/{id}/delete', 'StrukturController@delete');
Route::get('/editstruktur/{id}', 'StrukturController@editStruktur');
