<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controllerHome;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [controllerHome::class, 'index']);
Route::get('/regist', [controllerHome::class, 'registPage']);
Route::get('/home', [controllerHome::class, 'homePage']);