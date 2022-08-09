<?php

use App\Http\Controllers\Admin\AuthController;
use Illuminate\Support\Facades\Route;

// Auth
Route::post('login', [AuthController::class, 'login']);
Route::middleware('auth:admin')->group(function () {

});
