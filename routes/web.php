<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\kategoryBukuController;
use App\Http\Controllers\anggotaController;
use App\Http\Controllers\kelasController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\bukuController;

Route::get('/profile', function () {
    return view('profile', ['title'=> 'profile sekolah']);
});
Route::get('/', function () {
    return view('index', ['title'=> 'Perpustakaan SDN  Bergas Lor 01']);
});
Route::get('/layanan', function () {
    return view('layanan', ['title'=> 'layanan perpustakaan']);
});
Route::get('/koleksi', function () {
    return view('pencarian', ['title'=> 'koleksi kami'] );
});
Route::get('/daftarbuku', function () {
    return view('daftarbuku', ['title'=> 'koleksi kami'] );
});
Route::get('/anggota', function () {
    return view('anggota', ['title'=> 'koleksi kami'] );
})->middleware('auth');
Route::get('/peminjamanbuku', function () {
    return view('peminjamanbuku', ['title'=> 'koleksi kami'] );
});
Route::get('/pengembalianbuku', function () {
    return view('pengembalianbuku', ['title'=> 'koleksi kami'] );
});
Route::get('/guru', function () {
    return view('guru', ['title'=> 'home guru']);
});
Route::get('/home', function () {
    return view('home', ['title'=> 'home guru']);
});
Route::get('/peminjaman', function () {
    return view('peminjaman/index', ['title'=> 'peminjaman']);
});

Route::get('/peminjaman', function () {
    return view('peminjaman', ['title'=> 'kelas']);
});
Route::get('/buku', function () {
    return view('buku', ['title'=> 'buku']);
});
Route::get('/login',[LoginController::class,'index'])->name('login');
Route::post('/login',[LoginController::class,'login']);
Route::put('peminjaman/{id}/update-status', [PeminjamanController::class, 'updateStatus'])->name('peminjaman.updateStatus');
Route::resource('peminjaman', PeminjamanController::class);

Route::get('/dashboard',[anggotaController::class,'index']);
Route::resource('/tambah-anggota',anggotaController::class);
Route::resource('/kelas',kelasController::class);
Route::resource('/kategory-buku',kategoryBukuController::class);
Route::resource('/buku',bukuController::class);
Route::get('/file',[anggotaController::class,'getFile']);
