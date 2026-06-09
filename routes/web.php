<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\KertashvsDBController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/menu', function () {
    return view('menu');
});

Route::get('/pertemuan1', function () {
    return view('pertemuan1');
});

Route::get('/pertemuan2', function () {
    return view('pertemuan2');
});

Route::get('/pertemuan3', function () {
    return view('pertemuan3');
});

Route::get('/pertemuan4', function () {
    return view('pertemuan4');
});

Route::get('/pertemuan5', function () {
    return view('pertemuan5');
});

Route::get('/tugaslinktree', function () {
    return view('tugasLinktree');
});

Route::get('/tugaspertemuan3', function () {
    return view('tugasPertemuan3');
});

Route::get('/pegawailama/{nama}', [PegawaiController::class, 'index']);
Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::get('/formulir/proses', [PegawaiDBController::class, 'proses']);

//route CRUD
Route::get('/pegawai', [PegawaiDBController::class, 'index']);

Route::get('/pegawai/tambah', [PegawaiDBController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiDBController::class, 'store']);
Route::get('/pegawai/edit/{id}', [PegawaiDBController::class, 'edit']);
Route::post('/pegawai/update', [PegawaiDBController::class, 'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiDBController::class, 'hapus']);
Route::get('/pegawai/cari', [PegawaiDBController::class, 'cari']);

//tugas pra EAS
Route::get('/kertashvs', [KertashvsDBController::class, 'indexhvs']);
Route::get('/kertashvs/tambah', [KertashvsDBController::class, 'tambahhvs']);
Route::post('/kertashvs/store', [KertashvsDBController::class, 'storehvs']);
Route::get('/kertashvs/edit/{kodekertashvs}', [KertashvsDBController::class, 'edithvs']);
Route::post('/kertashvs/update', [KertashvsDBController::class, 'updatehvs']);
Route::get('/kertashvs/hapus/{kodekertashvs}', [KertashvsDBController::class, 'hapushvs']);
Route::get('/kertashvs/cari', [KertashvsDBController::class, 'carihvs']);
