<?php

use App\Http\Controllers\AltasBajas;
use Illuminate\Support\Facades\Route;


Route::get('/',[AltasBajas::class,'inicio']);
Route::get('/registro',[AltasBajas::class,'index']);
Route::get('/crear',[AltasBajas::class,'create']);
Route::post('/store',[AltasBajas::class,'store']);
Route::get('/edit/{id}',[AltasBajas::class,'edit'])->name('edit');
Route::put('/update/{id}',[AltasBajas::class,'update'])->name('update');