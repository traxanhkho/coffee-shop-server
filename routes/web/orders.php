<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


Route::get('/', [OrderController::class, 'index']);

Route::get('/statuses', [OrderController::class, 'getStatuses']);

Route::get('/{orderId}/edit', [OrderController::class, 'edit']);

// Route::get('/show', [ProductController::class, 'show']);
// Route::get('/{productId}/edit', [ProductController::class, 'edit']);

// Route::middleware(['auth:sanctum', 'role:Admin,Manager'])->group(function () {
//     Route::post('/', [ProductController::class, 'store']);
//     Route::patch('/{productId}/update', [ProductController::class, 'update']);

//     Route::put('/{productId}/attach', [ProductController::class, 'type_attach']);
//     Route::put('/{productId}/detach', [ProductController::class, 'type_detach']);

//     Route::delete('/{product}/delete', [ProductController::class, 'destroy']);
// });

Route::middleware(['auth:sanctum'])->group(function () {
    Route::post('/', [OrderController::class, 'store']);
});
