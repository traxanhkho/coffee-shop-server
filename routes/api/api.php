<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    $roles = $request->user()->roles;

    return [
        'user' => $request->user(),
        'roles' => $roles
    ];
});

Route::post('/login', [AuthController::class, 'login']);

Route::post('/register', [AuthController::class, 'createUser']);

Route::post('/logout', [AuthController::class, 'logout']);
