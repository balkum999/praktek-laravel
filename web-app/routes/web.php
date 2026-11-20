<?php

use Illuminate\Support\Facades\Route;

//import Controller
use App\Http\Controllers\Web;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\KalkulatorController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmployeController;
use App\Http\Controllers\AuthController;
#Route::get('/', function () {
#    return view('welcome');
#});

//Route::get('/', function () {
//return view('welcome');
//return "Hallo namaku adalah Laravel, Salam Kenal";
//});

Route::get('/', function(){
return view('login');
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
//Route::get('/dashboard',[DashboardController::class, 'dash']);

//Route::get('/gallery',[DashboardController::class, 'gallery']);

// route ke employecontroller ke fungsi index
//Route::get('/employe',[EmployeController::class, 'index']);

//Route::resource('employe',EmployeController::class);

//Route::get('/employe/create',[EmployeController::class, 'create']);
//Route::post('/employe/store',[EmployeController::class, 'store']);

//Route::get('/employe/edit/{employe}',[EmployeController::class, 'show']);
//Route::put('/employe/{employe}',[EmployeController::class, 'update']);

//Route::delete('/employe/{employe}',[EmployeController::class, 'destroy']);

// route untuk login
Route::post('/login',[AuthController::class, 'cek']);

// route untuk logout
Route::get('/logout',[AuthController::class, 'logout']);

Route::group(['middleware' => 'islogin'], function(){
    Route::get('/dashboard',[DashboardController::class, 'dash']);
    Route::get('/gallery',[DashboardController::class, 'gallery']);
     // Otomatis membuat semua nama route employe.*
    Route::resource('employe', EmployeController::class);
    Route::get('/logout',[AuthController::class, 'logout']);
});