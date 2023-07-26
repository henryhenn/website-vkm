<?php

use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\QuotesController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('landing');
});

Auth::routes(['register' => false]);

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

    Route::resource('profil', ProfilController::class)->only('index', 'edit', 'update');
    Route::resource('anggota', AnggotaController::class)->only('index', 'store', 'update', 'show');
    Route::resource('quotes', QuotesController::class)->only('store', 'update');

//    jQuery Routes
    Route::get('get-user-quote', [QuotesController::class, 'getQuote']);
    Route::post('get-status', [AnggotaController::class, 'getStatus']);
    Route::get('get-anggota', [AnggotaController::class, 'getAnggota']);
    Route::get('get-anggota/{id}', [AnggotaController::class, 'getAnggotaById']);
});
