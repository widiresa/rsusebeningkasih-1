<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index']);

Route::get('/tentang-kami', [HomeController::class, 'tentang_kami']);

Route::get('/layanan', [HomeController::class, 'layanan']);

Route::get('/jadwal-dokter', [HomeController::class, 'jadwal_dokter']);

Route::get('/kontak', [HomeController::class, 'kontak']);