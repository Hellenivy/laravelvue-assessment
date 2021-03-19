<?php

use App\Http\Controllers\v1\api\Orders\OrdersController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/orders', [OrdersController::class, 'index']);
Route::post('/order', [OrdersController::class, 'store']);
Route::get('/orders/{id}', [OrdersController::class, 'show']);
Route::put('/order/{id}', [OrdersController::class, 'update']);
Route::delete('/order/{id}', [OrdersController::class, 'destroy']);

Route::get('/suppliers', [SuppliersController::class, 'index']);
Route::post('/suppliers', [SuppliersController::class, 'store']);
Route::get('/suppliers/{id}', [SuppliersController::class, 'show']);
Route::put('/suppliers/{id}', [SuppliersController::class, 'update']);
Route::delete('/suppliers/{id}', [SuppliersController::class, 'destroy']);

Route::get('/products', [ProductsController::class, 'index']);
Route::post('/products', [ProductsController::class, 'store']);
Route::get('/products/{id}', [ProductsController::class, 'show']);
Route::put('/products/{id}', [ProductsController::class, 'update']);
Route::delete('/products/{id}', [ProductsController::class, 'destroy']);
