<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MasukController;
use App\Http\Controllers\KeluarController;
use App\Http\Controllers\RekapitulasiController;
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

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', [DashboardController::class, 'index']);

// Masuk
Route::middleware(['auth:sanctum', 'verified'])->get('/masuk', [MasukController::class, 'index']);
Route::middleware(['auth:sanctum', 'verified'])->get('/masuk/add', [MasukController::class, 'add']);
Route::middleware(['auth:sanctum', 'verified'])->post('/masuk/insert', [MasukController::class, 'insert']);
Route::middleware(['auth:sanctum', 'verified'])->get('/masuk/edit/{id}', [MasukController::class, 'edit']);
Route::middleware(['auth:sanctum', 'verified'])->post('/masuk/update/{id}', [MasukController::class, 'update']);
Route::middleware(['auth:sanctum', 'verified'])->get('/masuk/delete/{id}', [MasukController::class, 'delete']);
Route::middleware(['auth:sanctum', 'verified'])->get('/masuk/cetak', [MasukController::class, 'print']);

//Keluar
Route::middleware(['auth:sanctum', 'verified'])->get('/keluar', [KeluarController::class, 'index']);
Route::middleware(['auth:sanctum', 'verified'])->get('/keluar/add', [KeluarController::class, 'add']);
Route::middleware(['auth:sanctum', 'verified'])->post('/keluar/insert', [KeluarController::class, 'insert']);
Route::middleware(['auth:sanctum', 'verified'])->get('/keluar/edit/{id}', [KeluarController::class, 'edit']);
Route::middleware(['auth:sanctum', 'verified'])->post('/keluar/update/{id}', [KeluarController::class, 'update']);
Route::middleware(['auth:sanctum', 'verified'])->get('/keluar/delete/{id}', [KeluarController::class, 'delete']);
Route::middleware(['auth:sanctum', 'verified'])->get('/keluar/cetak', [KeluarController::class, 'print']);



// Route::middleware('auth:sanctum')->group( function() {

//     Route::get('dashboard',[DashboardController::class],'index');

//      Route::controller(MasukController::class)->group(function(){
//          Route::get('masuk', 'MasukController', 'index');
//          Route::get('/masuk/add', 'MasukController', 'add');
//          Route::post('masuk/insert','MasukController', 'insert');
//          Route::get('/masuk/edit/{id}', 'MasukController', 'edit');
//          Route::post('masuk/update/{id}', 'MasukController', 'update');
//          Route::post('masuk/delete/{id}', 'MasukController', 'delete');
//          Route::post('masuk/cetak', 'MasukController', 'print');
//      });

//      Route::controller(KeluarController::class)->group(function(){
//          Route::get('keluar', 'KeluarController', 'index');
//          Route::get('keluar/add', 'KeluarController', 'add');
//          Route::get('keluar/insert', 'KeluarController', 'insert');
//          Route::get('keluar/edit/{id}', 'KeluarController', 'edit');
//          Route::get('keluar/update/{id}', 'KeluarController', 'update');
//          Route::get('keluar/delete/{id}', 'KeluarController', 'delete');
//          Route::get('keluar/cetak', 'KeluarController', 'print');
//      });
// });
