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
    return view('admin.dashboard');
})->name('admin.dashboard');

Route::get('admin/barang/{key}/' , 'AdminController@barangIndex')->name('admin.barang.index'); //done
Route::get('admin/barang/{key}/create' , 'AdminController@barangCreate')->name('admin.barang.create'); //done
Route::post('admin/barang/{key}/create' , 'AdminController@barangStore')->name('admin.barang.store'); //done
// talent
Route::get('admin/talent/service/', 'AdminController@serviceTalentIndex');
Route::get('admin/talent/payment/', 'AdminController@paymentTalentIndex')->name('admin.tp.index');
Route::get('admin/talent/payment/create', 'AdminController@paymentTalentCreate')->name('admin.tp.create');
Route::post('admin/talent/payment/create', 'AdminController@paymentTalentStore')->name('admin.tp.create');
// client
Route::get('admin/client/payment/', 'AdminController@paymentClientIndex');
// order
Route::get('admin/order/service', 'AdminController@orderServiceIndex')->name('admin.os.index');
Route::post('admin/order/temp', 'AdminController@orderTempCreate')->name('admin.ot.create');
Route::post('admin/order/service/create', 'AdminController@orderServiceCreate')->name('admin.os.create');