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

//Redirects
Route::get('/', function () {
    return view('auth.login2');
});

//Auth
Auth::routes();

//Back-ends
Route::get('/test',"api\debuggerController@index");
Route::get('/accounts',"api\ClientsController@index");
Route::get('/dashboard',"api\ProductController@index");
Route::get('/products',"api\ProductController@products");
Route::get('/product_profile/{id}',"api\ProductController@product_profile");
Route::get('/vehicle',"api\VehicleController@index");
Route::get('/view_vehicle/{id}',"api\VehicleController@vehicle_profile");
Route::get('/transactions',"api\TransactionController@index");
Route::get('/product_profile/{id}',"api\ProductController@product_profile");
Route::get('/walk-in',"api\TransactionController@walk_ins");