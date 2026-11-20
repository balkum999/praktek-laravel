<?php

use Illuminate\Support\Facades\Route;

//import Controller
use App\Http\Controllers\Web;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\KalkulatorController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmployeController;

#Route::get('/', function () {
#    return view('welcome');
#});

Route::get('/', function () {
//return view('welcome');
return "Hallo namaku adalah Laravel, Salam Kenal";
});

//route baru
Route::get('/about', function () {
//return view('welcome');
return "<h2>Ini adalah laman About</h2>";
});

//route ke controller Web ke fungsi home
#Route::get('/web',[Web::class, 'home']);

//route ke controller Web ke fungsi home
Route::get('/web',[Web::class, 'home']);

//route ke controller Web ke fungsi profil
Route::get('/profil/{nama}',[Web::class, 'profil']);

// route ke controller MahasiswaController ke fungsi index
Route::get('/daftar/mahasiswa',[MahasiswaController::class, 'index']);

// route ke controller KalkulatorController ke fungsi luasSegitiga
Route::get('/kalkulator/segitiga',[KalkulatorController::class, 'luasSegitiga']);

// route ke dashboardcontroller ke fungsi dash
Route::get('/dashboard',[DashboardController::class, 'dash']);

Route::get('/gallery',[DashboardController::class, 'gallery']);

// route ke employecontroller ke fungsi index
Route::get('/employe',[EmployeController::class, 'index']);
