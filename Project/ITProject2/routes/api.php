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
Route::apiResources(['product' => 'API\ProductController']);
Route::apiResources(['client' => 'API\ClientController']);
Route::apiResources(['productDetails' => 'API\ProductDetailsController']);
Route::apiResources(['provider' => 'API\ProvidersController']);
Route::apiResources(['transaction' => 'API\TransactionController']);
Route::apiResources(['category' => 'API\CategoryController']);
Route::apiResources(['clientrans' => 'API\CustomerTrans']);
Route::apiResources(['clientOnly' => 'API\ClientsOnlyController']);
Route::apiResources(['jo' => 'API\JobOrderController']);
Route::get('findMe', 'API\ProductController@search');