<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CustomerInformationController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware('auth')->group(function () {
    Route::controller(DashboardController::class)->prefix('dashboard')->group(function () {
        Route::get('/', 'index')->name('dashboard');
    });
    Route::controller(UserController::class)->prefix('user')->group(function () {

    });
    Route::controller(UserProfileController::class)->prefix('userProfile')->group(function () {

    });
    Route::resource('/customer', CustomerController::class);
    Route::resource('/customerInformation', CustomerInformationController::class)->except('index');

});

require __DIR__.'/auth.php';
