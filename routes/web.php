<?php

use App\Http\Controllers\ArmazenamentoController;
use App\Http\Controllers\Initial\GrupoController;
use App\Http\Controllers\Initial\MensagemController;
use App\Http\Controllers\Initial\UserController;
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

Route::get('/', [InicioController::class, "index"]);

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
      })->name('dashboard');
});