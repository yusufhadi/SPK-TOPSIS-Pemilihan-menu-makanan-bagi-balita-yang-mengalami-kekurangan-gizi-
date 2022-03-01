<?php

use App\Http\Controllers\Admin\CriteriaController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\PenentuanController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [DashboardController::class, 'index'])->name('home');
Route::get('/criteria', [CriteriaController::class, 'criteria'])->name('criteria');
Route::get('/umur', [CriteriaController::class, 'umur'])->name('umur');
Route::get('/berat', [CriteriaController::class, 'berat'])->name('berat');
Route::get('/tinggi', [CriteriaController::class, 'tinggi'])->name('tinggi');
Route::get('/alergi', [CriteriaController::class, 'alergi'])->name('alergi');
Route::get('/penentuan', [PenentuanController::class, 'index'])->name('penentuan');
Route::get('/penentuan/form', [PenentuanController::class, 'create'])->name('form');
Route::post('/penentuan/form/tambah-data', [PenentuanController::class, 'store'])->name('tambah-data');
Route::get('/penentuan/form/edit-data/{id}', [PenentuanController::class, 'edit'])->name('edit-data');
Route::put('/penentuan/form/update-data/{id}', [PenentuanController::class, 'update'])->name('update-data');
Route::get('/penentuan/form/hapus-data/{id}', [PenentuanController::class, 'destroy'])->name('hapus-data');
