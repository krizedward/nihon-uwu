<?php

use Illuminate\Support\Facades\Route;

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

// use App\Http\Controllers\KategoriProdukController;

// Ketegori Produk
// Route::get('kategori-produk', [KategoriProdukController::class, 'index'])->name('kategori.produk.index');
// Route::get('kategori-produk/create', [KategoriProdukController::class, 'create'])->name('kategori.produk.create');
// Route::post('kategori-produk', [KategoriProdukController::class, 'store'])->name('kategori.produk.store');
// Route::get('kategori-produk/{id}/edit', [KategoriProdukController::class, 'edit'])->name('kategori.produk.edit');
// Route::get('kategori-produk/{id}', [KategoriProdukController::class, 'show'])->name('kategori.produk.show');
// Route::put('kategori-produk/{id}', [KategoriProdukController::class, 'update'])->name('kategori.produk.update');
// Route::delete('kategori-produk/{id}', [KategoriProdukController::class, 'destroy'])->name('kategori.produk.destroy');

Route::prefix('admin')->group(function () {
    // awal
    Route::get('registrasi-talent', function () {
        return view('admin.registrasi-talent.index');
    });
});

Route::get('/', function () {
    // return view('welcome');
    // return view('admin.dashboard');
    return view('admin.registrasi-talent.create');
});

Route::get('/1', function () {
    return view('template.component-card');
});
