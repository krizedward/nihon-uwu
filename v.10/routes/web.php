<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\KategoriProdukController;
use App\Http\Controllers\KategoriTalentController;

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

// note client :
// membuat form validasi untuk client yang ingin menggunakan aplikasi [v]
// membuat form rating untuk memberikan nilai kepada service [v]
// membuat profile ke client dengan talent yang ada dengan profil toko. [v]
// merubah gambar logo dan warna aplikasi sesuai logo [v]

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

Route::get('/', function () {
    // return view('welcome');
    // return view('admin.dashboard');
    return view('client.dashboard');
});

Route::get('/old', [KategoriTalentController::class, 'index'])->name('admin.kategori-talent.index');
Route::get('/create', [KategoriTalentController::class, 'create']);
Route::post('/create', [KategoriTalentController::class, 'store']);
Route::get('/show/{id}', [KategoriTalentController::class, 'show'])->name('admin.kategori-talent.show');
Route::get('/edit/{id}', [KategoriTalentController::class, 'edit'])->name('admin.kategori-talent.edit');
Route::put('/edit/{id}', [KategoriTalentController::class, 'update'])->name('admin.kategori-talent.update');
Route::delete('/delete/{id}', [KategoriTalentController::class, 'destroy'])->name('admin.kategori-talent.destroy');

Route::get('/1', function () {
    return view('template.component-card');
});

// temp route

Route::get('/pembayaran/chart', function () {
    // pembayaran
    return view('client.pembayaran.chart');
});

Route::get('/pembayaran/order-konfirm', function () {
    // pembayaran
    return view('client.pembayaran.order-konfirm');
});

Route::get('/pembayaran/metode', function () {
    // pembayaran
    return view('client.pembayaran.metode');
});

Route::get('/pembayaran/berhasil', function () {
    // pembayaran
    return view('client.pembayaran.success');
});

Route::get('/pemesanan/talent-katalog', function () {
    // pemesanan
    return view('client.pemesanan.talent-katalog');
});

Route::get('/pemesanan/talent-domisili', function () {
    // pemesanan
    return view('client.pemesanan.talent-domisili');
});

Route::get('/pemesanan/talent-listorder', function () {
    // pemesanan
    return view('client.pemesanan.talent-listorder');
});

Route::get('/pemesanan/talent-riwayat', function () {
    // pemesanan
    return view('client.pemesanan.talent-riwayat');
});

Route::get('/pemesanan/talent-page', function () {
    // pemesanan
    return view('client.pemesanan.talent-page');
});

Route::get('/pemesanan/talent-rating', function () {
    // pemesanan
    return view('client.pemesanan.talent-rating');
});

// Route::get('/pemesanan/talent-detail', function () {
//     // pemesanan
//     return view('client.pemesanan.talent-detail');
// });

Route::get('/chat', function () {
    return view('client.chat.index');
});

Route::get('/riwayat', function () {
    //riwayat
    return view('client.riwayat.index');
});

Route::get('/riwayat/detail', function () {
    //riwayat
    return view('client.riwayat.detail');
});

Route::get('/pengaturan', function () {
    // pengaturan
    return view('client.pengaturan.index');
});

Route::get('/pengaturan/profile', function () {
    //pengaturan
    return view('client.pengaturan.profile');
});

Route::get('/pengaturan/profile/edit', function () {
    //pengaturan
    return view('client.pengaturan.profile-edit');
});

// Route::get('/talent-katalog', function () {
//     // pemesanan
//     return view('client.pemesanan.talent-katalog');
// });

Route::get('/talent-detail', function () {
    // pemesanan
    return view('client.pemesanan.talent-detail');
});

Route::get('/offline', function () {
    return view('client.offline');
});