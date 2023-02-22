<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\loginController;
use App\Http\Controllers\registercontroller;
use App\Http\Controllers\dashboardcontroller;
use App\Http\Controllers\depositscontroller;
use App\Http\Controllers\withdrawController;
use App\Http\Controllers\transfercontroller;
use App\Http\Controllers\statementController;

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
Route::get('/', function () {
    return view('welcome');
});

Route::get('login', [loginController::class, 'login'])->name('login');
Route::resource('register', registercontroller::class);
Route::get('registration', [registercontroller::class, 'registration'])->name('register');
Route::get('dashboard', [dashboardcontroller::class, 'dashboard'])->name('dashboard');
Route::get('deposit', [depositscontroller::class, 'deposits'])->name('deposits');
Route::get('Withdraw', [withdrawController::class, 'Withdraw'])->name('Withdraw');
Route::get('Transfer', [transfercontroller::class, 'Transfer'])->name('Transfer');
Route::get('Statement', [statementController::class, 'Statement'])->name('Statement');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');