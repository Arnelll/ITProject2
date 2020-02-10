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
Route::get('/mechanic',"api\MechanicController@index");
Route::get('/walkin',"api\TransactionController@walk_ins");
Route::post('/insert', array('as' => 'insert', 'uses' => 'api\JobOrderController@insert'));
Route::get('/findPrice', array('as' => 'findPrice', 'uses' => 'api\JobOrderController@findPrice'));
Route::get('/new_walkin',"api\JobOrderController@new_walkin");
Route::get('/view_service/{id}/{jo_id}',"api\TransactionController@view_service");
Route::get('/profile/{id}',"api\ProfileController@profile");
Route::get('/new_sales',"api\ServiceController@new_sales");
Route::post('/service_insert', array('as' => 'service_insert', 'uses' => 'api\ServiceController@insert_service'));
Route::get('/view_accounts/{id}',"api\ClientsController@view_accounts");
Route::post('/product_insert', array('as' => 'product_insert', 'uses' => 'api\ProductController@insert'));
Route::get('/product_co', "api\CheckOutController@index");
Route::get('/new_product', "api\ProductController@new_product");
Route::post('/account_insert', array('as' => 'account_insert', 'uses' => 'api\ClientsController@insert'));
Route::get('/new_account',"api\ClientsController@new_account");
Route::post('/vehicle_insert', array('as' => 'vehicle_insert', 'uses' => 'api\VehicleController@insert'));
Route::get('/new_vehicle',"api\VehicleController@new_vehicle");
Route::get('/edit_product/{id}',"api\ProductController@edit_product");
Route::post('/product_update', array('as' => 'product_update', 'uses' => 'api\ProductController@product_update'));
Route::get('/edit_account/{id}',"api\ClientsController@edit_account");
Route::post('/account_update', array('as' => 'account_update', 'uses' => 'api\ClientsController@account_update'));
Route::post('/transaction_update', array('as' => 'transaction_update', 'uses' => 'api\TransactionController@transaction_update'));
Route::get('/new_mechanic',"api\MechanicController@new_mechanic");
Route::post('/mechanic_insert', array('as' => 'mechanic_insert', 'uses' => 'api\MechanicController@insert'));
Route::post('/joborder/fetch', 'api\CheckOutController@fetch')->name('joborder.fetch');
Route::post('/checkout_insert', array('as' => 'checkout_insert', 'uses' => 'api\CheckoutController@insert'));
Route::get('/delivery', "api\DeliveryController@view_delivery");
Route::get('/view_checkout/{id}',"api\CheckOutController@view_checkout");
Route::get('/new_service',"api\ServiceController@new_service");
Route::get('/opt_trans',"api\ServiceController@opt_trans");
Route::get('/sales',"api\SalesController@index");
Route::get('/prod_co',"api\ProductCheckoutController@index");
Route::post('/insert_sales', array('as' => 'insert_sales', 'uses' => 'api\ServiceController@insert_sales'));
Route::get('/view_prodco',"api\ProductCheckoutController@view_details");