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
Route::get('/test',"api\JobOrderController@index");
Route::get('/accounts',"api\ClientsController@index");
Route::get('/dashboard',"api\ProductController@index");
Route::get('/products',"api\ProductController@products");
Route::get('/product_profile/{id}',"api\ProductController@product_profile");
Route::get('/vehicle',"api\VehicleController@index");
Route::get('/view_vehicle/{id}',"api\VehicleController@vehicle_profile");
Route::get('/joborder',"api\JobOrderController@index");
Route::get('/service',"api\TransactionController@index");
Route::get('/walkin',"api\TransactionController@walk_ins");
Route::post('/insert', array('as' => 'insert', 'uses' => 'api\JobOrderController@insert'));
Route::get('/findPrice', array('as' => 'findPrice', 'uses' => 'api\JobOrderController@findPrice'));
Route::get('/new_walkin',"api\JobOrderController@new_walkin");
Route::get('/view_walkin/{id}',"api\TransactionController@view_walkin");
Route::get('/profile/{id}',"api\ProfileController@profile");
Route::get('/new_service',"api\ServiceController@new_service");
Route::post('/service_insert', array('as' => 'service_insert', 'uses' => 'api\ServiceController@insert'));
Route::get('/view_accounts/{id}',"api\ClientsController@view_accounts");
Route::post('/product_insert', array('as' => 'product_insert', 'uses' => 'api\ProductController@insert'));
Route::get('/new_vehicle',"api\VehicleController@new_vehicle");
Route::post('/vehicle_insert', array('as' => 'vehicle_insert', 'uses' => 'api\VehicleController@insert'));