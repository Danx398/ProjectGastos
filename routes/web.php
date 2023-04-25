<?php

use App\Http\Controllers\AltasBajas;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
/* LOGIN */
Route::get('/',[AuthController::class,'index'])->name('login');
Route::get('/nuevoUsuario', [AuthController::class, 'crearUsuario']);
Route::post('/logear', [AuthController::class, 'logear'])->name('logear');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

/* Proyecto Gastos */
Route::get('/inicio',[AltasBajas::class,'inicio'])->name('inicio');
Route::get('/registro',[AltasBajas::class,'index']);
Route::get('/crear',[AltasBajas::class,'create']);
Route::post('/store',[AltasBajas::class,'store']);
Route::get('/edit/{id}',[AltasBajas::class,'edit'])->name('edit');
Route::put('/update/{id}',[AltasBajas::class,'update'])->name('update');
Route::get('/show/{id}',[AltasBajas::class,'show'])->name('show');
Route::delete('/destroy/{id}',[AltasBajas::class,'destroy'])->name('destroy');