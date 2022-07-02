<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productController;
use App\Http\Controllers\authController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/products', [productController::class, 'index']);
Route::post('/products', [productController::class, 'store']);
Route::get('/products/{id}', [productController::class, 'show']);
Route::put('/products/{id}', [productController::class, 'update']);
Route::delete('/products/{id}', [productController::class, 'destroy']);



Route::post('/signup', [authController::class, 'register']);
Route::post('/signin', [authController::class, 'signin']);
Route::get('/users', [authController::class, 'returnUsers']);




