<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
// contoh
Route::get('v1/talent', 'api\v1\AdminController@talent');
// contoh jadi Restful API
Route::get('v1/posts', 'api\v1\AdminController@index');
Route::post('v1/posts/store', 'api\v1\AdminController@store');
Route::get('v1/posts/{id?}', 'api\v1\AdminController@show');
Route::put('v1/posts/update', 'api\v1\AdminController@update');
Route::delete('v1/posts/{id?}', 'api\v1\AdminController@destroy');