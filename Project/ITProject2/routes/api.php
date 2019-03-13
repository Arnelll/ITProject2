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

