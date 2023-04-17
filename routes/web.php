<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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



 
 //
//  Route::get('/home', function(){
//      return view('Home');
//  });

//  Route::get('/about', function(){
//      return view('about');
//  });

// Halaman Utama
Route::get('/', function () {
    return view('homepage.index');
});

// Untuk Guest
Route::get('/parkir1', '\App\Http\Controllers\guestController@index');

// Login & Logout
Route::get('/login', '\App\Http\Controllers\loginController@index')->name('login')->middleware('guest');
Route::post('/login', '\App\Http\Controllers\loginController@authenticate');
Route::post('/logout', '\App\Http\Controllers\loginController@logout');

// ADMIN
Route::get('/dashboard', function() {
    return view('dashboard.index');
})->name('dashboard')->middleware('auth', 'role:Admin');

Route::get('/keuangan', '\App\Http\Controllers\laporanController@index')->middleware(['auth', 'role:Admin']);
 
Route::get('/pegawai', '\App\Http\Controllers\AdminController@index')->middleware(['auth', 'role:Admin']); // Menampilkan data yang ada di database
Route::post('/pegawai/create', '\App\Http\Controllers\AdminController@create')->middleware(['auth', 'role:Admin']); // Membuat data baru
Route::get('/pegawai/{id}/edit', '\App\Http\Controllers\AdminController@edit')->middleware(['auth', 'role:Admin']); // Mengedit data yang sudah ada
Route::post('/pegawai/{id}/update', '\App\Http\Controllers\AdminController@update')->middleware(['auth', 'role:Admin']); // Mengupdate data yang sudah diedit
Route::get('/pegawai/{id}/delete', '\App\Http\Controllers\AdminController@delete')->middleware(['auth', 'role:Admin']); // Menghapus data

Route::get('/mall1', function() {
    return view('mall1.index');
});

// Petugas Masuk Mall 1
Route::get('/pmasuk1', '\App\Http\Controllers\pmasuk1Controller@index')->name('pmasuk1')->middleware(['auth', 'role:Petugas Masuk,Admin']);
Route::post('/pmasuk1/add', '\App\Http\Controllers\pmasuk1Controller@add')->middleware(['auth', 'role:Petugas Masuk,Admin']);

// Petugas Ruang Mall 1
Route::get('/pruang1', '\App\Http\Controllers\pruang1Controller@index')->name('pruang1')->middleware(['auth', 'role:Petugas Ruang,Admin']);
Route::get('/pruang1/{id}/edit', '\App\Http\Controllers\pruang1Controller@edit')->middleware(['auth', 'role:Petugas Ruang,Admin']);
Route::post('/pruang1/{id}/update', '\App\Http\Controllers\pruang1Controller@update')->middleware(['auth', 'role:Petugas Ruang,Admin']);

// Petugas Keluar Mall 1
Route::get('/pkeluar1', '\App\Http\Controllers\pkeluar1Controller@index')->name('pkeluar1')->middleware(['auth', 'role:Petugas Keluar,Admin']);
Route::get('/pkeluar1/{id}/edit', '\App\Http\Controllers\pkeluar1Controller@edit')->middleware(['auth', 'role:Petugas Keluar,Admin']);
Route::post('/pkeluar1/{id}/update', '\App\Http\Controllers\pkeluar1Controller@update')->middleware(['auth', 'role:Petugas Keluar,Admin']);

Route::get('/mall2', function() {
    return view('mall2.index');
});
Route::get('/mall3', function() {
    return view('mall3.index');
});