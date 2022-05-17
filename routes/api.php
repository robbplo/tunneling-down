<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CarController;
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

Route::get('/cars', [CarController::class, 'index']);
Route::get('/cars/cheap', [CarController::class, 'cheap']);
Route::get('/cars/expensive', [CarController::class, 'expensive']);
Route::get('/cars/{car}', [CarController::class, 'show']);
Route::get('/brands', [BrandController::class, 'index']);
Route::get('/brands/{brand}', [BrandController::class, 'show']);
