<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JurusanControllerRifkySuryarizal;
use App\Http\Controllers\GuruControllerRifkySuryarizal;
use App\Http\Controllers\SiswaControllerRifkySuryarizal;
use App\Http\Controllers\PelajaranControllerRifkySuryarizal;
use App\Http\Controllers\KurikulumControllerRifkySuryarizal;
use App\Http\Controllers\KelasControllerRifkySuryarizal;
use App\Http\Controllers\JadwalControllerRifkySuryarizal;
use App\Http\Controllers\NilaiControllerRifkySuryarizal;
use App\Http\Controllers\PraktikumControllerRifkySuryarizal;

Route::get('/', function () {
    return view('home_rifkysuryarizal');
});

Route::get('/jurusan', [JurusanControllerRifkySuryarizal::class, 'index']);
Route::get('/guru', [GuruControllerRifkySuryarizal::class, 'index']);
Route::get('/siswa', [SiswaControllerRifkySuryarizal::class, 'index']);
Route::get('/pelajaran', [PelajaranControllerRifkySuryarizal::class, 'index']);
Route::get('/kurikulum', [KurikulumControllerRifkySuryarizal::class, 'index']);
Route::get('/kelas', [KelasControllerRifkySuryarizal::class, 'index']);
Route::get('/jadwal', [JadwalControllerRifkySuryarizal::class, 'index']);
Route::get('/nilai', [NilaiControllerRifkySuryarizal::class, 'index']);
Route::get('/praktikum', [PraktikumControllerRifkySuryarizal::class, 'index']);
