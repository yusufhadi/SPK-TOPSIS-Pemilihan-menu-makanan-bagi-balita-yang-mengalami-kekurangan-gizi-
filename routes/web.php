<?php

use App\Http\Controllers\Admin\CriteriaController;
use App\Http\Controllers\Admin\DashboardController;
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
