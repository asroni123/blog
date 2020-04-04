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

/*    */
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//sifat dari parameter itu case sensitive
Route::get('Halo', function () {
    return "Upper case - Halo, Selamat datang di kuliah Pengembangan Komponen Web";
});

Route::get('blog', function() {
    return view('blog');
});

Route::get('dosen', 'DosenController@index');

//Route::get('/pegawai/{nama}','PegawaiController@index');
//fungsi ambil 
Route::get('/formulir', 'PegawaiController@formulir');
//fungsi tampil
Route::post('/formulir/proses', 'PegawaiController@proses');


// route blog
Route::get('/blog', 'BlogController@home');
Route::get('/blog/tentang', 'BlogController@tentang');
Route::get('/blog/kontak', 'BlogController@kontak');

// buat CRUD
Route::get('/pegawai','PegawaiController@index');
Route::get('/pegawai/tambah','PegawaiController@tambah');

Route::get('/pegawai/add','PegawaiController@add');

Route::get('/pegawai/edit/{id}','PegawaiController@edit');
Route::post('/pegawai/store','PegawaiController@store');
Route::post('/pegawai/update','PegawaiController@update');
Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');


//kuliah Pengembangan Konten Web
Route::get('/kontenweb','KontenwebController@homepage');