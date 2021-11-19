<?php

use App\Http\Controllers\GradoController;
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

Route::get('/', [GradoController::class, 'index']);
Route::get('/add-grade',[GradoController::class, 'nuevoGrado'])->name('/add-grade');
Route::post('/save-grade', [GradoController::class, 'store'])->name('/save-grade');