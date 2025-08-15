<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CresoliController;
use App\Http\Controllers\AgenciasController;
use App\Http\Controllers\CatalogosEconomicosController;
use App\Http\Controllers\MeController;
use App\Http\Controllers\GarantiasController;
use App\Http\Controllers\LineasCreditoController;
use App\Http\Controllers\CuentasAhorroController;
use App\Http\Controllers\CuentasAportacionesController;


Route::get('/ping', function () {
    return response()->json([
        'status' => 'ok',
        'message' => 'Servidor Laravel accesible ✅',
        'ip' => request()->ip(),
        'time' => now()->toDateTimeString()
    ]);
});


Route::post('/login', [AuthController::class, 'login']);

// Secure routes for the backend
Route::middleware('auth:sanctum')->group(function () {
    Route::post('creditos/solicitudes', [CresoliController::class, 'store']);

    Route::get('/agencias', [AgenciasController::class, 'index']);
    Route::get('/economia/sectores', [CatalogosEconomicosController::class, 'sectores']);
    Route::get('/economia/sectores/{sectorId}/actividades', [CatalogosEconomicosController::class, 'actividades']);
    Route::get('/me', MeController::class);

        // garantías del usuario autenticado
    Route::get('/me/garantias', [GarantiasController::class, 'mine']);

    // (Opcional) backoffice: por código de cliente
    Route::get('/clientes/{client_code}/garantias', [GarantiasController::class, 'byClient']);

    Route::get('/creditos/lineas', [LineasCreditoController::class, 'index']);
    Route::get('/creditos/lineas/{id}', [LineasCreditoController::class, 'show']);
    Route::get('/creditos/lineas/by-code/{code}', [LineasCreditoController::class, 'byCode']);
    //Metodos para Cuentas de Ahorro
    Route::get('/me/cuentas/ahorro', [CuentasAhorroController::class, 'mine']);
    Route::get('/clientes/{client_code}/cuentas/ahorro', [CuentasAhorroController::class, 'byClient']); // opcional backoffice
    //Metodos para Cuentas de Aportaciones
    Route::get('/me/cuentas/aportaciones', [CuentasAportacionesController::class, 'mine']);
    Route::get('/clientes/{client_code}/cuentas/aportaciones', [CuentasAportacionesController::class, 'byClient']); // opcional
});


//version de prebas sin seguridad

// use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\AuthController;
// use App\Http\Controllers\CresoliController;
// use App\Http\Controllers\AgenciasController;
// use App\Http\Controllers\CatalogosEconomicosController;
// use App\Http\Controllers\MeController;
// use App\Http\Controllers\GarantiasController;
// use App\Http\Controllers\LineasCreditoController;

// Route::get('/ping', function () {
//     return response()->json([
//         'status' => 'ok',
//         'message' => 'Servidor Laravel accesible ✅',
//         'ip' => request()->ip(),
//         'time' => now()->toDateTimeString()
//     ]);
// });

// // Login normal (puedes ignorarlo si no vas a autenticar)
// Route::post('/login', [AuthController::class, 'login']);

// // 🔓 TODAS LAS RUTAS ABIERTAS (SIN auth:sanctum) SOLO PARA PRUEBAS 🔓

// // Solicitudes de crédito
// Route::post('creditos/solicitudes', [CresoliController::class, 'store']);

// // Catálogos y agencias
// Route::get('/agencias', [AgenciasController::class, 'index']);
// Route::get('/economia/sectores', [CatalogosEconomicosController::class, 'sectores']);
// Route::get('/economia/sectores/{sectorId}/actividades', [CatalogosEconomicosController::class, 'actividades']);

// // Datos de usuario (simulación)
// Route::get('/me', MeController::class);

// // Garantías
// Route::get('/me/garantias', [GarantiasController::class, 'mine']);
// Route::get('/clientes/{client_code}/garantias', [GarantiasController::class, 'byClient']);

// // Líneas de crédito
// Route::get('/creditos/lineas', [LineasCreditoController::class, 'index']);
// Route::get('/creditos/lineas/{id}', [LineasCreditoController::class, 'show']);
// Route::get('/creditos/lineas/by-code/{code}', [LineasCreditoController::class, 'byCode']);
// // --- IGNORE ---
