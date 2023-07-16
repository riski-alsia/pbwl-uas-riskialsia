<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/siswa', [App\Http\Controllers\SiswaController::class, 'index']);
Route::get('/siswa/create', [App\Http\Controllers\SiswaController::class, 'create']);
Route::post('/siswa', [App\Http\Controllers\SiswaController::class, 'store']);
Route::get('/siswa/edit/{id}', [App\Http\Controllers\SiswaController::class, 'edit']);
Route::patch('/siswa/{id}', [App\Http\Controllers\SiswaController::class, 'update']);
Route::delete('/siswa/{id}', [App\Http\Controllers\SiswaController::class, 'destroy']);


Route::get('/spp', [App\Http\Controllers\SppController::class, 'index']);
Route::get('/spp/create', [App\Http\Controllers\SppController::class, 'create']);
Route::post('/spp', [App\Http\Controllers\SppController::class, 'store']);
Route::get('/spp/edit/{id}', [App\Http\Controllers\SppController::class, 'edit']);
Route::patch('/spp/{id}', [App\Http\Controllers\SppController::class, 'update']);
Route::delete('/spp/{id}', [App\Http\Controllers\SppController::class, 'destroy']);

Route::get('/pembayaran', [App\Http\Controllers\PembayaranController::class, 'index']);
Route::get('/pembayaran/create', [App\Http\Controllers\PembayaranController::class, 'create']);
Route::post('/pembayaran', [App\Http\Controllers\PembayaranController::class, 'store']);
Route::get('/pembayaran/edit/{id}', [App\Http\Controllers\PembayaranController::class, 'edit']);
Route::patch('/pembayaran/{id}', [App\Http\Controllers\PembayaranController::class, 'update']);
Route::delete('/pembayaran/{id}', [App\Http\Controllers\PembayaranController::class, 'destroy']);



