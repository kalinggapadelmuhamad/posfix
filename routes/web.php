<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmployesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::redirect('/', 'login');

Route::get('login', [AuthController::class, 'create'])->middleware('guest')->name('createLogin');
Route::post('login', [AuthController::class, 'login'])->name('login');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::redirect('dashboard', 'dashboard/home');

Route::prefix('dashboard')->middleware('auth')->group(function () {

    Route::get('home', [DashboardController::class, 'createDashboard'])->name('createDashboard');

    Route::get('profile', [DashboardController::class, 'createProfile'])->name('createProfile');
    Route::post('updateProfile', [DashboardController::class, 'updateProfile'])->name('updateProfile');

    Route::prefix('employes')->group(function () {

        Route::get('/', [EmployesController::class, 'createEmployes'])->name('creatEmployes');
        Route::post('update', [EmployesController::class, 'updateEmployes'])->name('updateEmployes');
        Route::post('store', [EmployesController::class, 'storeEmployes'])->name('storeEmployes');
        Route::get('delete/{uuid}', [EmployesController::class, 'deleteEmployes'])->name('deleteEmployes');

        Route::get('print', [EmployesController::class, 'printEmployes'])->name('printEmployes');
    });
});
