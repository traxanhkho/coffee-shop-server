<?php

use App\Http\Controllers\TypeController;
use Illuminate\Support\Facades\Route;


Route::get('/', [TypeController::class, 'index']);
// Route::post('/', [ProductController::class, 'store']);



