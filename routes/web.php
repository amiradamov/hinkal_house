<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WellcomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UserTypeController;

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

Route::resource('/', WellcomeController::class);
Route::resource('/contactus', ContactController::class);
Route::resource('/ex', UserTypeController::class);