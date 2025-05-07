<?php
 
 use App\Http\Controllers\BarangController;
 use App\Http\Controllers\KategoriController;
 use App\Http\Controllers\LevelController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\PenjualanDetailController;
use App\Http\Controllers\SupplierController;
 use App\Http\Controllers\UserController;
 use App\Http\Controllers\AuthController;
 use Illuminate\Support\Facades\Route;
 use App\Http\Controllers\POSController;
use App\Http\Controllers\StokController;
use App\Http\Controllers\WelcomeController;
 
 Route::get('/', [WelcomeController::class,'index']);
 
 Route::group(['prefix' => 'user'], function () {
     Route::get('/', [UserController::class, 'index']); // menampilkan halaman awal user
     Route::post('/list', [UserController::class, 'list']); // menampilkan data user dalam bentuk json untuk datatables
     Route::get('/create', [UserController::class, 'create']); // menampilkan halaman form tambah user
     Route::post('/', [UserController::class, 'store']); // menyimpan data user baru
     Route::get('/create_ajax', [UserController::class, 'create_ajax']); // Menampilkan halaman form tambah user Ajax
     Route::post('/store_ajax', [UserController::class, 'store_ajax']);    // Menyimpan data user baru Ajax
     Route::get('/{id}', [UserController::class, 'show']); // menampilkan detail user
     Route::get('/{id}/edit', [UserController::class, 'edit']); // menampilkan halaman form edit user
     Route::put('/{id}', [UserController::class, 'update']); // menyimpan perubahan data user
     Route::get('/{id}/edit_ajax', [UserController::class, 'edit_ajax']); // Menampilkan halaman form edit user Ajax
     Route::put('/{id}/update_ajax', [UserController::class, 'update_ajax']); // Menyimpan perubahan data user Ajax
     Route::get('/{id}/delete_ajax', [UserController::class, 'confirm_ajax']); // Untuk tampilkan form confirm delete user Ajax
     //Route::delete('/{id}/delete_ajax', [UserController::class, 'delete_ajax']); // Untuk hapus data user Ajax
     Route::delete('/{id}', [UserController::class, 'destroy']); // menghapus data user
     Route::get('/{id}/show_ajax', [UserController::class, 'show_ajax']);
 });
 
 Route::group(['prefix' => 'level'], function () {
    Route::get('/', [LevelController::class, 'index'])->name('level.index'); // Menampilkan daftar level
    Route::post('/list', [LevelController::class, 'list'])->name('level.list');
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
    Route::get('/{id}/show_ajax', [LevelController::class, 'show_ajax'])->name('level.show_ajax');
});


 Route::group(['prefix' => 'kategori'], function () {
    Route::get('/', [KategoriController::class, 'index'])->name('kategori.index'); // Menampilkan daftar kategori
    Route::post('/list', [KategoriController::class, 'list'])->name('kategori.list');
    // Data JSON untuk DataTables
    Route::get('/create', [KategoriController::class, 'create'])->name('kategori.create'); // Form tambah kategori
    Route::post('/', [KategoriController::class, 'store'])->name('kategori.store'); // Simpan kategori baru
    Route::get('/create_ajax', [KategoriController::class, 'create_ajax'])->name('kategori.create_ajax');// Form tambah kategori (AJAX)
    Route::post('/ajax', [KategoriController::class, 'store_ajax'])->name('kategori.store_ajax'); // Simpan kategori baru (AJAX)
    Route::get('/{id}', [KategoriController::class, 'show'])->name('kategori.show'); // Detail kategori
    Route::get('/{id}/edit_ajax', [KategoriController::class, 'edit_ajax'])->name('kategori.edit_ajax'); // Form edit kategori (AJAX)
    Route::put('/{id}/update_ajax', [KategoriController::class, 'update_ajax'])->name('kategori.update_ajax'); // Simpan perubahan kategori (AJAX)
    Route::get('/{id}/delete_ajax', [KategoriController::class, 'confirm_ajax'])->name('kategori.confirm_ajax'); // Konfirmasi hapus (AJAX)
    Route::get('/{id}/edit', [KategoriController::class, 'edit'])->name('kategori.edit'); // Form edit kategori
    Route::put('/{id}', [KategoriController::class, 'update'])->name('kategori.update'); // Simpan perubahan kategori
    Route::delete('/{id}', [KategoriController::class, 'destroy'])->name('kategori.destroy'); // Hapus kategori
    Route::delete('/{id}/delete_ajax', [KategoriController::class, 'delete_ajax'])->name('kategori.delete_ajax'); 
    Route::get('/{id}/show_ajax', [KategoriController::class, 'show_ajax'])->name('kategori.show_ajax');

});


Route::group(['prefix' => 'barang'], function () {
    Route::get('/', [BarangController::class, 'index'])->name('barang.index');
    Route::post('/list', [BarangController::class, 'list'])->name('barang.list');
    Route::get('/create', [BarangController::class, 'create'])->name('barang.create');
    Route::post('/', [BarangController::class, 'store'])->name('barang.store');
    Route::get('/create_ajax', [BarangController::class, 'create_ajax']);
    Route::post('/ajax', [BarangController::class, 'store_ajax']);
    Route::get('/{id}', [BarangController::class, 'show'])->name('barang.show');
    Route::get('/{id}/edit_ajax', [BarangController::class, 'edit_ajax']);
    Route::put('/{id}/update_ajax', [BarangController::class, 'update_ajax']);
    Route::get('/{id}/delete_ajax', [BarangController::class, 'confirm_ajax']);
    Route::get('/{id}/edit', [BarangController::class, 'edit'])->name('barang.edit');
    Route::put('/{id}', [BarangController::class, 'update'])->name('barang.update');
    Route::delete('/{id}', [BarangController::class, 'destroy'])->name('barang.destroy');
    Route::delete('/{id}/delete_ajax', [BarangController::class, 'delete_ajax']);
    Route::get('/{id}/show_ajax', [BarangController::class, 'show_ajax'])->name('barang.show_ajax');
});

Route::group(['prefix' => 'stok'], function () {
    Route::get('/', [StokController::class, 'index']);
    Route::post('/list', [StokController::class, 'list']);
    Route::get('/create', [StokController::class, 'create']);
    Route::post('/', [StokController::class, 'store']);
    Route::get('/create_ajax', [StokController::class, 'create_ajax']);
    Route::post('/store_ajax', [StokController::class, 'store_ajax']);
    Route::get('/{id}', [StokController::class, 'show']);
    Route::get('/{id}/edit', [StokController::class, 'edit']);
    Route::put('/{id}', [StokController::class, 'update']);
    Route::get('/{id}/show_ajax', [StokController::class, 'show_ajax']);
    Route::get('/{id}/edit_ajax', [StokController::class, 'edit_ajax']);
    Route::put('/{id}/update_ajax', [StokController::class, 'update_ajax']);
    Route::get('/{id}/delete_ajax', [StokController::class, 'confirm_ajax']);
    Route::delete('/{id}/delete_ajax', [StokController::class, 'delete_ajax']);
    Route::delete('/{id}', [StokController::class, 'destroy']);
});

Route::prefix('penjualan')->group(function () {
    Route::get('/', [PenjualanController::class, 'index'])->name('penjualan.index'); // Menampilkan daftar penjualan
    Route::get('create', [PenjualanController::class, 'create'])->name('penjualan.create'); // Menampilkan form tambah penjualan
    Route::post('store', [PenjualanController::class, 'store'])->name('penjualan.store'); // Menyimpan penjualan baru
    Route::get('{id}', [PenjualanController::class, 'show'])->name('penjualan.show'); // Menampilkan detail penjualan 
    Route::get('{id}/edit', [PenjualanController::class, 'edit'])->name('penjualan.edit'); // Menampilkan form edit penjualan 
    Route::put('{id}', [PenjualanController::class, 'update'])->name('penjualan.update'); // Update data penjualan 
    Route::delete('{id}', [PenjualanController::class, 'destroy'])->name('penjualan.destroy'); // Hapus penjualan 
});

Route::group(['prefix' => 'penjualan_detail'], function () {
    Route::get('/', [PenjualanDetailController::class, 'index'])->name('penjualan_detail.index');
    Route::post('/list', [PenjualanDetailController::class, 'list'])->name('penjualan_detail.list');
    Route::get('/create', [PenjualanDetailController::class, 'create'])->name('penjualan_detail.create');
    Route::post('/', [PenjualanDetailController::class, 'store'])->name('penjualan_detail.store');
    Route::get('/create_ajax', [PenjualanDetailController::class, 'create_ajax'])->name('penjualan_detail.create_ajax');
    Route::post('/store_ajax', [PenjualanDetailController::class, 'store_ajax'])->name('penjualan_detail.store_ajax');
    Route::get('/{id}', [PenjualanDetailController::class, 'show'])->name('penjualan_detail.show');
    Route::get('/{id}/edit', [PenjualanDetailController::class, 'edit'])->name('penjualan_detail.edit');
    Route::put('/{id}', [PenjualanDetailController::class, 'update'])->name('penjualan_detail.update');
    Route::get('/{id}/show_ajax', [PenjualanDetailController::class, 'show_ajax'])->name('penjualan_detail.show_ajax');
    Route::get('/{id}/edit_ajax', [PenjualanDetailController::class, 'edit_ajax'])->name('penjualan_detail.edit_ajax');
    Route::put('/{id}/update_ajax', [PenjualanDetailController::class, 'update_ajax'])->name('penjualan_detail.update_ajax');
    Route::get('/{id}/delete_ajax', [PenjualanDetailController::class, 'confirm_ajax'])->name('penjualan_detail.confirm_ajax');
    Route::delete('/{id}/delete_ajax', [PenjualanDetailController::class, 'delete_ajax'])->name('penjualan_detail.delete_ajax');
    Route::delete('/{id}', [PenjualanDetailController::class, 'destroy'])->name('penjualan_detail.destroy');
});


Route::pattern('id','[0-9]+'); // artinya ketika ada parameter {id}, maka harus berupa angka

Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class,'postlogin']);
Route::get('logout', [AuthController::class,'logout'])->middleware('auth');

Route::middleware(['auth'])->group(function(){ // artinya semua route di dalam group ini harus login dulu
    // masukkan semua route yang perlu autentikasi di sini
});