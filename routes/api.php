<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\RestaurantController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::apiResource('clients', ClientController::class);
Route::apiResource('providers', ProviderController::class);
Route::apiResource('restaurants', RestaurantController::class);

Route::get('restaurants/{id}/clients', [RestaurantController::class, 'getClientesRestaurante']);

Route::post('login', [LoginController::class, 'login']);

