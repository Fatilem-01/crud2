<?php

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\employeesController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Auth;


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


Route::resource("/employee",employeesController::class);
Route::get('/search',[SearchController::class , 'search'])->name('search');
Route::get('login',[AuthController::class , 'index'])->name('login');
Route::get('registration',[AuthController::class , 'registration'])->name('registration');
Route::POST('post-registration',[AuthController::class , 'postRegistration'])->name('registration.post');
Route::POST('post-login',[AuthController::class , 'postLogin'])->name('login.post');
Route::get('logout',[AuthController::class , 'logout'])->name('logout');











?>


