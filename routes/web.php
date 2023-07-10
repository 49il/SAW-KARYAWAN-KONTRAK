<?php
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\AlternatifController;
use App\Http\Controllers\CripsController;
use App\Http\Controllers\PenilaianController;
use App\Http\Controllers\AlgoritmaController;
use App\Http\Controllers\DashboardController;
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


Auth::routes();//mengatur rute-rute yang terkait dengan proses otentikasi (authentication) 

Route::get('/', [HomeController::class, 'index'])//menuju ke halaman login
    ->name('home');
Route::resource('kriteria', KriteriaController::class)->except([ 'create']);
Route::resource('alternatif',AlternatifController::class)->except([ 'create','show']);
Route::resource('crips',CripsController::class)->except(['index', 'create', 'show']);
Route::resource('penilaian',penilaianController::class);
Route::get('/perhitungan', [AlgoritmaController::class, 'index'])
    ->name('perhitungan.index');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
Route::get('/generate-spk-pdf', [HomeController::class, 'generateSPKPDF'])
    ->name('generate-spk-pdf');



