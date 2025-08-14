<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CresoliController;
use App\Http\Controllers\AgenciasController;
use App\Http\Controllers\CatalogosEconomicosController;

Route::post('/login', [AuthController::class, 'login']);

//rutas Iniciales para MSplusw Virtual Banca
Route::post('creditos/solicitudes', [CresoliController::class, 'store']);




Route::get('/agencias', [AgenciasController::class, 'index']);
Route::get('/economia/sectores', [CatalogosEconomicosController::class, 'sectores']);
Route::get('/economia/sectores/{sectorId}/actividades', [CatalogosEconomicosController::class, 'actividades']);
