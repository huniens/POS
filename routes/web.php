<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
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

Route::get('/', [WelcomeController::class, 'index']);

Route::group(['prefix' => 'user'], function () {
    Route::get('/', [UserController::class, 'index']);          // Menampilkan halaman awal user
    Route::post('/list', [UserController::class, 'list']);       // Menampilkan data user dalam bentuk JSON untuk DataTables
    Route::get('/create', [UserController::class, 'create']);    // Menampilkan halaman form tambah user
    Route::post('/', [UserController::class, 'store']);          // Menyimpan data user baru
    Route::get('/create_ajax', [UserController::class, 'create_ajax']); // Menampilkan halaman form tambah user AJAX
    Route::post('/ajax', [UserController::class, 'store_ajax']);        // Menyimpan data user baru AJAX
    Route::get('/{id}', [UserController::class, 'show']);        // Menampilkan detail user
    Route::get('/{id}/edit', [UserController::class, 'edit']);   // Menampilkan halaman form edit user
    Route::put('/{id}', [UserController::class, 'update']);      // Menyimpan perubahan data user
    Route::delete('/{id}', [UserController::class, 'destroy']);  // Menghapus data user
});