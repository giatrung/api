<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::prefix('v1')->group(function () {
    Route::get('/users', [UserController::class, 'index'])->name('Get list user');
    Route::get('/user/{id}', [UserController::class, 'show'])->name('Get user detail');
    Route::post('/user', [UserController::class, 'store'])->name('Create new user');
    Route::put('/user/{id}', [UserController::class, 'update'])->name('Update user');
});