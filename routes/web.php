<?php

use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class,'home'])->name('homepage');
Route::get('/edit', [PublicController::class,'edit'])->name('edit');
