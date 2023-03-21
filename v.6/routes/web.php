<?php

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

Route::get('/', function () {
    // return view('welcome'); //ganti route name saja //untuk custom website frontend
    return redirect()->route('admin.os.index'); //ganti route name saja //untuk custom website frontend
})->name('admin.dashboard');

// example
Route::get('admin/barang/{key}/' , 'AdminController@barangIndex')->name('admin.barang.index'); //example
Route::get('admin/barang/{key}/create' , 'AdminController@barangCreate')->name('admin.barang.create'); //example
Route::post('admin/barang/{key}/create' , 'AdminController@barangStore')->name('admin.barang.store'); //example

// admin role
// talent
Route::get('admin/talent/service/', 'AdminController@serviceTalentIndex'); // masih belum di set url
Route::get('admin/talent/payment/', 'AdminController@paymentTalentIndex')->name('admin.tp.index'); // masih belum di set url
Route::get('admin/talent/payment/create', 'AdminController@paymentTalentCreate')->name('admin.tp.create');
Route::post('admin/talent/payment/create', 'AdminController@paymentTalentStore')->name('admin.tp.create');
// client
Route::get('admin/client/payment/', 'AdminController@paymentClientIndex');
// order
Route::get('admin/order/service', 'AdminController@orderServiceIndex')->name('admin.os.index'); //done view
Route::post('admin/order/temp', 'AdminController@orderTempCreate')->name('admin.ot.create'); //done proses
Route::delete('admin/order/temp/delete/{idTemp}', 'AdminController@orderTempDelete')->name('admin.ot.delete');
Route::post('admin/order/service/create', 'AdminController@orderServiceCreate')->name('admin.os.create'); //done proses
Route::get('admin/order/service/detail/{id}', 'AdminController@orderSeviceDetail')->name('admin.os.detail');

// Route::post('/upload', function(Request $request) {
//     $path = $request->file('image')->store('public/images');
//     return $path;
// });
// untuk menyimpan di storage