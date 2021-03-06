<?php

use App\Http\Controllers\BisnisController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LapanganController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\LayoutController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\RegistrasiController;
use App\Http\Controllers\RiwayatController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\UlasanController;
use App\Models\Ulasan;
use Illuminate\Cache\Console\ForgetCommand;

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

Route::get('/contact', function () {
    return view('layouts.contact',["title" => "Contact"]);
});

Route::get('/about', function() {
    return view('layouts.abouts',["title" => "About"]);
});

Route::get('403', function () {
    return view('403');
});

// ----------- Route Bisnis Proses --------------

Route::resource('admins/lapangan', LapanganController::class)->middleware('admin');
Route::resource('admins/booking', BookingController::class)->middleware('admin');
Route::resource('admins/transaksi', TransaksiController::class)->middleware('admin');
Route::resource('admins/ulasan', UlasanController::class)->middleware('admin');
Route::resource('admins/user', UserController::class)->middleware('admin');
Route::resource('', LayoutController::class);
Route::resource('admins', DashboardController::class)->middleware('admin');
Route::resource('pemesanan', BisnisController::class)->middleware('auth');
Route::resource('pembayaran', PembayaranController::class)->middleware('auth');
Route::resource('riwayat', RiwayatController::class)->middleware('auth');

Route::get('/home', [LayoutController::class, 'index'])->name('home');
Route::get('profile/{id}', [LayoutController::class, 'show'])->name('profile')->middleware('auth');
Route::get('profile/{id}/edit', [LayoutController::class, 'edit'])->name('edit.profile')->middleware('auth');
Route::get('beri-ulasan', [UlasanController::class, 'beriUlasan'])->name('beriUlasan');
Route::post('beri-ulasan', [UlasanController::class, 'storeBeriUlasan'])->name('storeBeriUlasan');
Route::put('profile/{id}', [LayoutController::class, 'update'])->name('update.profile');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


Route::get('/registrasi', [RegistrasiController::class, 'index'])->middleware('guest');
Route::post('/registrasi', [RegistrasiController::class, 'store']);

Route::get('/lapangan-list', [LapanganController::class, 'lapanganList']);
Route::get('transaksiPDF', [TransaksiController::class, 'transaksiPDF']);
Route::get('transaksiExcel', [TransaksiController::class, 'transaksiExcel']);
Route::get('invoice', [RiwayatController::class, 'invoice']);
Route::get('detail', [RiwayatController::class, 'tampil']);