<?php

use App\Http\Controllers\AcaraController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\QuotesController;
use App\Http\Controllers\SidebarController;
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

Route::get('/', LandingPageController::class);

Auth::routes(['register' => false]);

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

    Route::prefix('admin')->group(function () {
        Route::resource('anggota', AnggotaController::class)->except('edit', 'create');
        Route::get('anggota/{user:id}/permissions', [AnggotaController::class, 'permissions'])->name('permissions.index');
        Route::post('anggota/{user:id}/permissions', [AnggotaController::class, 'setPermissions'])->name('permissions.store');
    });

    Route::prefix('data')->group(function () {
        Route::resource('acara', AcaraController::class)->except('edit', 'create');
        Route::put('acara/active/{acara:id}', [AcaraController::class, 'updateActive'])->name('acara_active.update');
    });

    Route::post('anggota/update-password', [AnggotaController::class, 'updatePassword'])->name('anggota.updatePassword');
    Route::resource('profil', ProfilController::class)->only('index', 'edit', 'update');
    Route::resource('quotes', QuotesController::class)->only('store', 'update');

//    jQuery Routes
    Route::get('get-sidebar-menu', SidebarController::class);
    Route::get('get-user-quote', [QuotesController::class, 'getQuote']);
    Route::post('/get-status', [AnggotaController::class, 'getStatus']);
    Route::get('get-anggota/{user:id}', [AnggotaController::class, 'getAnggotaById']);
    Route::get('get-acara/{acara:id}', [AcaraController::class, 'getAcaraById']);
});
