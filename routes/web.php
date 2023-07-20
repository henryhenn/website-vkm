<?php

use App\Http\Controllers\ProfilController;
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
    return view('welcome');
});

Auth::routes(['register' => false]);

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

    Route::resource('profil', ProfilController::class)->only('index', 'edit', 'update');

//  Load backend components
    Route::view('render-dashboard-sidebar', 'components.dashboard-sidebar');
    Route::view('render-dashboard-navbar', 'components.dashboard-navbar');
});
