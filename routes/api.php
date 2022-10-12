<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Buyer\BuyerController;
use App\Http\Controllers\Category\CategoryController;
use App\Http\Controllers\Product\ProductController;
use App\Http\Controllers\Seller\SellerController;
use App\Http\Controllers\Transaction\TransactionController;
use App\Http\Controllers\User\UserController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('buyer', BuyerController::class)->only(['index', 'show'])->middleware('auth:sanctum');
Route::apiResource('seller', SellerController::class)->only(['index', 'show'])->middleware('auth:sanctum');
Route::apiResource('category', CategoryController::class)->only(['index', 'show'])->middleware('auth:sanctum');
Route::apiResource('product', ProductController::class)->only(['index', 'show'])->middleware('auth:sanctum');
Route::apiResource('transaction', TransactionController::class)->only(['index', 'show'])->middleware('auth:sanctum');
Route::apiResource('user', UserController::class)->only(['index', 'show'])->middleware('auth:sanctum');
