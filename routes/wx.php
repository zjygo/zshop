<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\Wx\AuthController;

// Route::get('auth/register', [AuthController::class, 'register']);
// Route::get('auth/register', '\App\Http\Controllers\Wx\AuthController@register');

Route::post('auth/register', 'AuthController@register');
