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

Route::apiResources(['user' => 'API\UserController']);
Route::apiResources(['mechanic' => 'API\MechanicController']);
Route::apiResources(['client' => 'API\ClientController']);
Route::apiResources(['product' => 'API\ProductController']);
Route::apiResources(['walkintransaction' => 'API\WalkinTransactionController']);
Route::apiResources(['vehicle' => 'API\VehicleController']);
Route::apiResources(['supplier' => 'API\SupplierController']);