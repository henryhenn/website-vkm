<?php

use App\Http\Controllers\Api\AnggotaController;
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

Route::middleware('auth:sanctum')->group(function () {
    Route::controller(AnggotaController::class)->group(function () {
        Route::get('anggota', 'getAllData');
        Route::post('anggota', 'store');
        Route::put('anggota', 'update');
    });
});

