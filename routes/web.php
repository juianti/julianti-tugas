<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('/recipes', [DashboardController::class, 'recipes']);
// Route::get('/register-user', [AuthController::class, 'registerUser']);
// Route::get('register-user', [AuthController::class, 'tampilRegistrasiUser']);
// Route::post('/registrasi/user', [AuthController::class, 'submitRegistrasiUser']);use App\Http\Controllers\AuthController;

// Tampilkan form
Route::get('/register-user', [AuthController::class, 'tampilRegistrasiUser'])->name('register');
Route::post('/registrasi/user', [AuthController::class, 'submitRegistrasiUser']);
Route::get('/register-kontributor', [AuthController::class, 'tampilRegistrasiContributor'])->name('register');
Route::post('/registrasi/kontributor', [AuthController::class, 'submitRegistrasikontributor']);


Route::get('/about', [DashboardController::class, 'about']);
//Tampilkan form

// Login route (pastikan sudah dibuat view login-nya)
Route::get('/login', [AuthController::class, 'tampilLogin'])->name('login');
Route::post('/login', [AuthController::class, 'submitLogin'])->name('login.submit');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


//admin
 Route::get('/dashboard-admin', [AdminController::class, 'index'])->name('admin.dashboard');