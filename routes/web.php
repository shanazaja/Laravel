<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HitungController;
use App\Http\Controllers\PelangganController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/', function () {
    return view ('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index']);

//route pelanggan
Route::get('/customer', [PelangganController::class,'indexpelanggan']); //untuk menampilkan seluruh data
Route::get('/tambahpelanggan', [PelangganController::class,'tambahpelanggan']); //untuk menampilkan tambah data



