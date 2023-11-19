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
    //Authentication
    Route::post('/login', ctl('Auth', 'login'));
    Route::post('/register', ctl('Auth', 'register'));
    Route::post('/logout', ctl('Auth', 'logout'))->middleware('auth:api');
    Route::post('/refresh', ctl('Auth', 'refresh'));
    //User
    Route::get('/users', ctl('User', 'index'))->name('Get list user')->middleware('auth:api-admin');
    Route::get('/user/{id}', ctl('User', 'show'))->name('Get an user')->middleware('auth:api');
    Route::post('/user', ctl('User', 'store'))->name('Create new user')->middleware('auth:api');
    Route::put('/user/{id}', ctl('User', 'update'))->name('Update user')->middleware('auth:api');
    //User Detail
    Route::get('/userDetails', ctl('UserDetail', 'index'))->name('Get list user detail')->middleware('auth:api-admin');
    Route::get('/userDetails/{id}', ctl('UserDetail', 'show'))->name('Get user detail')->middleware('auth:api');
    Route::post('/userDetails', ctl('UserDetail', 'store'))->name('Create new user detail')->middleware('auth:api');
    Route::put('/userDetails/{id}', ctl('UserDetail', 'update'))->name('Update user detail')->middleware('auth:api');
});