<?php

use App\Http\Controllers\PegawaiController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PegawaiController::class, 'index'])->name('home');
Route::post('/search', [PegawaiController::class, 'search'])->name('search');
Route::post('/store', [PegawaiController::class, 'store'])->name('store');