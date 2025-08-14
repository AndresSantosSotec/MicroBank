<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CresoliController;

Route::post('/login', [AuthController::class, 'login']);

//rutas Iniciales para MSplusw Virtual Banca
Route::post('creditos/solicitudes', [CresoliController::class, 'store']);



