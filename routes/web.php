<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\transaksiController;
use Dompdf\Dompdf;
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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/dashboard', [transaksiController::class, 'index']);
Route::get('/create',[transaksiController::class, 'create']);
Route::post('/store',[transaksiController::class, 'store']);
Route::get('/show/{id}',[transaksiController::class, 'show']);
Route::post('/update/{id}',[transaksiController::class, 'update']);
Route::get('/destroy/{id}',[transaksiController::class, 'destroy']);

Auth::routes();
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/generatepdf', [transaksiController::class, 'generatepdf'])->name('transaksi.pdf');

//Route::get('/export_user_pdf', [transaksiController::class, 'export_user_pdf'])->name('export_user_pdf');
