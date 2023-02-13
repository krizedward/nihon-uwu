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
    return view('welcome');
});

// kirim email
Route::get('/send-email', 'TalentController@testEmail');

Route::post('method/test/content', function (\Illuminate\Http\Request $request) {
    $data = $request;
    return dd($data->toArray());
})->name('method.test');

Route::get('/register/talent', function () {
    return view('talent.register');
})->name('talent.register');

Route::get('/register/client', function () {
    return view('client.register');
})->name('client.register');

// Route::post('/register/talent','TalentController@register')->name('talent.register');
// Route::post('/register/client','ClientController@register')->name('client.register');

Auth::routes();
Auth::routes(['verify' => true]);
Route::group(['middleware' => ['auth','admin']], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    // talent
    Route::get('admin/talent/show/{id_talent}','AdminController@talentShow');
    Route::get('admin/talent/create','AdminController@talentCreate')->name('admin.talent.create');
    Route::post('admin/talent/create','AdminController@talentStore')->name('admin.talent.store');

    // rent
    Route::get('admin/rent/service','AdminController@rentCreate')->name('admin.rent.create');
    Route::post('admin/rent/service','AdminController@rentStore')->name('admin.rent.store');
    
    // client
    Route::get('admin/client/show/{id_talent}','AdminController@clientShow');

    // payment
    Route::get('admin/payment/service','AdminController@paymentCreate')->name('admin.payment.create');
    Route::post('admin/payment/service','AdminController@paymentStore')->name('admin.payment.store');

    // rating
    Route::get('admin/rating/talent','AdminController@ratingCreate')->name('admin.rating.create');
    Route::post('admin/rating/talent','AdminController@ratingStore')->name('admin.rating.store');

    // service
    Route::get('admin/service/talent','AdminController@serviceCreate')->name('admin.service.create');
    Route::post('admin/service/talent','AdminController@serviceStore')->name('admin.service.store');
});

Route::group(['middleware' => ['auth','talent']], function () {
    Route::get('/home', 'HomeController@index')->name('home');

    Route::prefix('talent')->group(function () {
        // home
        Route::post('{id}/register/profile','TalentController@registariTalent')->name('talent.register.profile');
        // fitur jadwal untuk talent (index,create,store,destroy)
        Route::get('{keterangan}/schedule', 'TalentController@scheduleIndex')->name('talent.schedule.index');// fitur jadwal untuk talent
        Route::get('{keterangan}/schedule/create', 'TalentController@scheduleCreate')->name('talent.schedule.create');// fitur membuat jadwal dari talent
        Route::post('{keterangan}/schedule/create', 'TalentController@scheduleStore')->name('talent.schedule.store');// fitur simpan jadwal dari talent
        Route::get('{keterangan}/schedule/{id}/edit', 'TalentController@scheduleEdit')->name('talent.schedule.edit');// fitur mengubah jadwal dari talent
        Route::put('{keterangan}/schedule/{id}/edit', 'TalentController@scheduleUpdate')->name('talent.schedule.update');// fitur update jadwal dari talent
        Route::get('{keterangan}/schedule/{id}/show', 'TalentController@scheduleShow')->name('talent.schedule.show');// fitur detail jadwal dari talent
        Route::get('{keterangan}/schedule/{id}', 'TalentController@scheduleDestroy')->name('talent.schedule.destroy');// fitur delete jadwal dari talent

        // melihat order masih menggunakan table rent_service
        Route::get('job/service', 'TalentController@rentIndex')->name('talent.rent.index');
        Route::get('{keterangan}/rent-service', 'TalentController@rentIndex')->name('talent.rent.index');// fitur ringkasan order

        // review review (index)
        Route::get('{keterangan}/rating', 'TalentController@ratingIndex')->name('talent.rating.index');// fitur review untuk talent
        Route::get('{keterangan}/review/{id}/show', 'TalentController@reviewIndex')->name('talent.review.show');// fitur review untuk talent

        // review payment
        Route::get('{keterangan}/payment', 'TalentController@paymentIndex')->name('talent.payment.index');
        Route::get('{keterangan}/payment/create', 'TalentController@paymentCreate')->name('talent.payment.create');
        Route::post('{keterangan}/payment/create', 'TalentController@paymentStore')->name('talent.payment.store');
        Route::post('{keterangan}/payment/{id}/show', 'TalentController@paymentShow')->name('talent.payment.show');
    });
});

Route::group(['middleware' => ['auth','client']], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    
    Route::prefix('client')->group(function () {

        // client
        Route::get('talent/list', 'ClientController@talentIndex')->name('client.talent.index');
        Route::get('talent/{id}/service', 'ClientController@talentService')->name('client.talent.service');
        Route::get('talent/{id}/service/schedule', 'ClientController@talentSchedule')->name('client.talent.schedule');
        Route::get('talent/{id}/service/schedule/order', 'ClientController@talentOrder')->name('client.talent.order');

        // order
        Route::get('rent/index', 'ClientController@rentIndex')->name('client.rent.index');
        Route::get('rent/service', 'ClientController@rentCreate')->name('client.rent.create');
        Route::post('rent/service', 'ClientController@rentStore')->name('client.rent.store');

        // promo
        Route::get('promo', 'ClientController@promo')->name('client.promo.service');

        // customer service
        Route::get('customer/service', 'ClientController@customerService')->name('client.customer.service');
    });

    Route::get('halaman/client', function () {
        return "halaman client";
    });
});

// Route::middleware(['admin','talent','client'])->group(function () {
//     Route::get('/home', function () {
//         return "selamat anda admin";
//     });
//     Route::get('/home', function () {
//         return "selamat anda talent";
//     });
//     Route::get('/home', 'HomeController@index')->name('home');
// });