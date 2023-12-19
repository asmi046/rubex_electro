<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ZayavkaController;
use App\Http\Controllers\AutchController;
use App\Http\Controllers\ReportsController;

use App\Http\Controllers\SenderController;

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

Route::get('/', [IndexController::class, "index"])->name('home');
Route::get('/zayavka', [ZayavkaController::class, "index"])->name('zayavka');
Route::get('/authorise', [AutchController::class, "index"])->name('auth');
Route::get('/reports', [ReportsController::class, "index"])->name('reports');

Route::get('/thencs', [SenderController::class, "thencs"])->name('thencs');
Route::post('/send_zayavka', [SenderController::class, "send_zayavka"])->name('send_zayavka');
