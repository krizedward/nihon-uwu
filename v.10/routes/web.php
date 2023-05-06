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
use App\Http\Controllers\KategoriTalentController;

// Ketegori Produk
// Route::get('kategori-produk', [KategoriProdukController::class, 'index'])->name('kategori.produk.index');
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

Route::get('/old', function () {
    // return view('welcome');
    // return view('admin.dashboard');
    return view('admin.kategori-talent.index');
});

Route::get('/', [KategoriTalentController::class, 'index'])->name('admin.kategori-talent.index');
Route::get('/create', [KategoriTalentController::class, 'create']);
Route::post('/create', [KategoriTalentController::class, 'store']);
Route::get('/show/{id}', [KategoriTalentController::class, 'show'])->name('admin.kategori-talent.show');
Route::get('/edit/{id}', [KategoriTalentController::class, 'edit'])->name('admin.kategori-talent.edit');
Route::put('/edit/{id}', [KategoriTalentController::class, 'update'])->name('admin.kategori-talent.update');
Route::delete('/delete/{id}', [KategoriTalentController::class, 'destroy'])->name('admin.kategori-talent.destroy');

Route::get('/1', function () {
    return view('template.component-card');
});
