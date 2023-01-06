<?php

use App\Http\Controllers\admin\BukuController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\KategoriController;
use \App\Http\Controllers\admin\MemberController;
use App\Http\Controllers\admin\OrdersController;
use App\Http\Controllers\admin\ReportController;
use \App\Http\Controllers\admin\UserController;
use App\Http\Controllers\ExcellExportController;
use App\Http\Controllers\OrderController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register-confirm');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/kategori/{slug}', [HomeController::class, 'kategori']);
Route::get('/histori', [HomeController::class, 'history']);

Route::get('/order/{slug}', [OrderController::class, 'index'])->name('order')->middleware('user');
Route::post('/order', [OrderController::class, 'store'])->name('order.store');



Route::middleware(['admin'])->group(function(){
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::resource('/dashboard/user', UserController::class)->except('show');

    Route::resource('/dashboard/user-member', MemberController::class)->except('show');

    Route::resource('/dashboard/buku', BukuController::class);

    Route::resource('/dashboard/buku-kategori', KategoriController::class)->except('show');

    Route::get('/dashboard/order', [OrdersController::class, 'index']);
    Route::get('/dashboard/order/status/{id}/complete', [OrdersController::class, 'complete']);

    Route::get('/dashboard/report', [ReportController::class, 'index']);

    Route::get('/dashboard/report/export-excel', [ReportController::class, 'excel'])->name('excel');
    Route::get('/dashboard/report/export-pdf', [ExcellExportController::class, 'index'])->name('pdf');
});


