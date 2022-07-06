<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LapanganController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LayoutController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\RegistrasiController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\UlasanController;

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

Route::get('/reset-password', function () {
    return view('Auth.reset-password');
});

Route::get('/forgot-password', function () {
    return view('Auth.forgot-password');
});

Route::get('/contact', function () {
    return view('layouts.contact',["title" => "Contact"]);
});

//---------route admin------------
// Route::view('/admins', 'admin.home');
// Route::view('/admin/pages/basictable', 'admin.pages.basictable');
// Route::view('/admin/pages/basicelement', 'admin.pages.basicelement');
// Route::view('/admin/pages/chart', 'admin.pages.chart');
// Route::view('/admin/pages/icons', 'admin.pages.icons');

// ----------- Route Bisnis Proses --------------

Route::resource('admins/lapangan', LapanganController::class)->middleware('admin');
Route::resource('admins/booking', BookingController::class)->middleware('admin');
Route::resource('admins/pelanggan', PelangganController::class)->middleware('admin');
Route::resource('admins/transaksi', TransaksiController::class)->middleware('admin');
Route::resource('admins/ulasan', UlasanController::class)->middleware('admin');
Route::resource('admins/user', UserController::class)->middleware('admin');
Route::resource('', LayoutController::class);
Route::resource('home', LayoutController::class);
Route::resource('admins', DashboardController::class)->middleware('admin');

Route::get('login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);


Route::get('registrasi', [RegistrasiController::class, 'index'])->middleware('guest');
Route::post('registrasi', [RegistrasiController::class, 'store']);

Route::get('/lapangan-list', [LapanganController::class, 'lapanganList']);
Route::get('transaksiPDF', [TransaksiController::class, 'transaksiPDF']);
Route::get('transaksiExcel', [TransaksiController::class, 'transaksiExcel']);
