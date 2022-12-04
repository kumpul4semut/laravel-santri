<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SantriController;

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

Route::get('/', [LoginController::class, 'login'])->name('login');
Route::post('/actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');

Route::get('register', [RegisterController::class, 'register'])->name('register');
Route::post('register/action', [RegisterController::class, 'actionregister'])->name('actionregister');
Route::get('register/verify/{verify_key}', [RegisterController::class, 'verify'])->name('verify');


Route::get('home', [HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');


Route::get('santri/tampil', [SantriController::class, 'tampilsantri'])->name('tampilsantri')->middleware('auth');
Route::get('santri/tambah', [SantriController::class, 'tambahsantri'])->name('tambahsantri')->middleware('auth');
Route::post('santri/simpan', [SantriController::class, 'simpansantri'])->name('simpansantri')->middleware('auth');
Route::get('santri/ubah/{id_santri}', [SantriController::class, 'ubahsantri'])->name('ubahsantri')->middleware('auth');
Route::post('santri/update', [SantriController::class, 'updatesantri'])->name('updatesantri')->middleware('auth');
Route::get('santri/hapus/{id_santri}', [SantriController::class, 'hapussantri'])->name('hapussantri')->middleware('auth');
