<?php

use App\Http\Controllers\loginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use Illuminate\Contracts\Session\Session;

Route::get('/', function () {
    return view('index');
});

Route::get('/login', [loginController::class, 'show']);
Route::post('/login', [loginController::class, 'login']);
Route::get('/logout', [loginController::class, 'logout']);
