<?php
 
 use App\Http\Controllers\BarangController;
 use App\Http\Controllers\KategoriController;
 use App\Http\Controllers\LevelController;
 use App\Http\Controllers\SupplierController;
 use App\Http\Controllers\UserController;
 use Illuminate\Support\Facades\Route;
 use App\Http\Controllers\POSController;
 use App\Http\Controllers\WelcomeController;
 
 Route::get('/', [WelcomeController::class,'index']);
 
 Route::group(['prefix' => 'user'], function () {
     Route::get('/', [UserController::class, 'index']); // menampilkan halaman awal user
     Route::post('/list', [UserController::class, 'list']); // menampilkan data user dalam bentuk json untuk datatables
     Route::get('/create', [UserController::class, 'create']); // menampilkan halaman form tambah user
     Route::post('/', [UserController::class, 'store']); // menyimpan data user baru
     Route::get('/create_ajax', [UserController::class, 'create_ajax']); // Menampilkan halaman form tambah user Ajax
     Route::post('/ajax', [UserController::class, 'store_ajax']);      // Menyimpan data user baru Ajax
     Route::get('/{id}', [UserController::class, 'show']); // menampilkan detail user
     Route::get('/{id}/edit', [UserController::class, 'edit']); // menampilkan halaman form edit user
     Route::put('/{id}', [UserController::class, 'update']); // menyimpan perubahan data user
     Route::get('/{id}/edit_ajax', [UserController::class, 'edit_ajax']); // Menampilkan halaman form edit user Ajax
     Route::put('/{id}/update_ajax', [UserController::class, 'update_ajax']); // Menyimpan perubahan data user Ajax
     Route::get('/{id}/delete_ajax', [UserController::class, 'confirm_ajax']); // Untuk tampilkan form confirm delete user Ajax
     Route::delete('/{id}/delete_ajax', [UserController::class, 'delete_ajax']); // Untuk hapus data user Ajax
     Route::delete('/{id}', [UserController::class, 'destroy']); // menghapus data user
 });
 
 Route::group(['prefix' => 'level'], function () {
     Route::get('/', [LevelController::class, 'index'])->name('level.index'); // Menampilkan daftar level
     Route::post('/list', [LevelController::class, 'getLevels'])->name('level.list'); // DataTables JSON
     Route::get('/create', [LevelController::class, 'create'])->name('level.create'); // Form tambah
     Route::post('/', [LevelController::class, 'store'])->name('level.store'); // Simpan data baru
     Route::get('/create_ajax', [LevelController::class, 'create_ajax']); // Menampilkan halaman form tambah level Ajax
     Route::post('/ajax', [LevelController::class, 'store_ajax']); // Menyimpan data level baru Ajax
     Route::get('/{id}', [LevelController::class, 'show'])->name('level.show'); // Menampilkan detail level
     Route::get('/{id}/edit_ajax', [LevelController::class, 'edit_ajax'])->name('level.edit_ajax'); // Form edit (AJAX)
     Route::put('/{id}/update_ajax', [LevelController::class, 'update_ajax'])->name('level.update_ajax'); // Simpan perubahan (AJAX)
     Route::get('/{id}/delete_ajax', [LevelController::class, 'confirm_ajax'])->name('level.confirm_ajax'); 
     Route::delete('/{id}/delete_ajax', [LevelController::class, 'delete_ajax'])->name('level.delete_ajax');
     Route::get('/{id}/edit', [LevelController::class, 'edit'])->name('level.edit'); // Form edit
     Route::put('/{id}', [LevelController::class, 'update'])->name('level.update'); // Simpan perubahan
     Route::delete('/{id}', [LevelController::class, 'destroy'])->name('level.destroy'); // Hapus level
 });
 