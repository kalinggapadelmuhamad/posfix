<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

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

Route::get('/login', [AuthController::class, 'index'])->name('loginPage');
Route::post('login', [AuthController::class, 'login'])->name('loginPost');

Route::prefix('dashboard')->group(function () {
    Route::get('/home', [DashboardController::class, 'index'])->name('dashboardHome');
});
