<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\UserController;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/artikel', [ArtikelController::class, 'index']);
Route::get('/artikel/{artikel:link}', [ArtikelController::class, 'show']);
Route::get('/kategori', [KategoriController::class, 'index']);
Route::get('/kategori/{kategori:link_kategori}', [KategoriController::class, 'show']);
Route::get('/penulis', [UserController::class, 'index']);
Route::get('/penulis/{penulis:username}', [UserController::class, 'show']);