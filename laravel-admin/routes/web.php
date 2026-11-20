<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

#Route::get('/', function () {
#    return view('welcome');
#});

Route::get('/', [DashboardController::class, 'index'])->name('home');
Route::get('/product', [DashboardController::class, 'product'])->name('product');
Route::get('/service', [DashboardController::class, 'service'])->name('service');
Route::get('/contact', [DashboardController::class, 'contact'])->name('contact');
Route::get('/about', [DashboardController::class, 'about'])->name('about');