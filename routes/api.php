<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

if (! function_exists('ctl')) {
    function ctl(string $controller, string $method) {
        $className = "App\\Http\\Controllers\\{$controller}Controller";
        return [$className, $method];
    }
}

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
    Route::get('/users', ctl('User', 'index'))->name('Get list user');
    Route::get('/user/{id}', [UserController::class, 'show'])->name('Get user detail');
    Route::post('/user', [UserController::class, 'store'])->name('Create new user');
    Route::put('/user/{id}', [UserController::class, 'update'])->name('Update user');
});