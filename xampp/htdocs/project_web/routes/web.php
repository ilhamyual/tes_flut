<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\KecamatanDesaController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/login', [LoginController::class, 'login']); //route post untuk login
Route::get('/login', [LoginController::class, 'index'])->name('login');

Route::post('/register', [RegisterController::class, 'register'])->name('register'); //route post untuk register
Route::get('/register', [RegisterController::class, 'index']);

Route::get('/kecamatan', [KecamatanDesaController::class, 'getKecamatan']);
Route::get('/desa/{id_kec}', [KecamatanDesaController::class, 'getDesaByKecamatan']);
