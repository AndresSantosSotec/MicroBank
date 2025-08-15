<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CliGarantium;
use App\Models\TbCliente;
use App\Http\Resources\GarantiaResource;

class GarantiasController extends Controller
{
    /**
     * Garantías del usuario autenticado (/me)
     */
    public function mine(Request $request)
    {
        $user = $request->user();

        // Opción rápida: si tu users.email es el código de cliente
        $clientCode = $user->email;

        // Si ya implementaste users.client_code:
        // $clientCode = $user->client_code;

        // Puedes filtrar por estado activo si aplica (ej. estado=1)
        $query = CliGarantium::where('idCliente', $clientCode)
            ->orderByDesc('idGarantia');

        // Paginado opcional
        $perPage = (int) $request->get('per_page', 20);
        $garantias = $query->paginate($perPage);

        return GarantiaResource::collection($garantias)
            ->additional(['status' => 'success']);
    }

    /**
     * Garantías por código de cliente (útil para backoffice)
     */
    public function byClient(Request $request, string $clientCode)
    {
        $query = CliGarantium::where('idCliente', $clientCode)
            ->orderByDesc('idGarantia');

        $perPage = (int) $request->get('per_page', 20);
        $garantias = $query->paginate($perPage);

        return GarantiaResource::collection($garantias)
            ->additional(['status' => 'success']);
    }
}
