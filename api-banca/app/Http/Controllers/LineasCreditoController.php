<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CreProducto;
use App\Http\Resources\LineaCreditoResource;

class LineasCreditoController extends Controller
{
    /**
     * GET /creditos/lineas
     * Parámetros:
     *  - q: string (busca en código y nombre)
     *  - estado: int | 'all' (por defecto 1)
     *  - per_page: int (por defecto 20)
     */
    public function index(Request $request)
    {
        $q       = trim((string) $request->get('q', ''));
        $estado  = $request->get('estado', 1);
        $perPage = (int) $request->get('per_page', 20);

        $query = CreProducto::query()
            ->select([
                'id', 'id_fondo', 'cod_producto', 'nombre', 'descripcion',
                'monto_maximo', 'tasa_interes', 'dias_calculo', 'porcentaje_mora',
                'dias_de_gracias', 'tipo_mora', 'tipo_calculo',
                'estado',
            ])
            ->orderBy('nombre');

        if ($estado !== 'all') {
            $query->where('estado', (int) $estado);
        }

        if ($q !== '') {
            $query->where(function ($w) use ($q) {
                $w->where('cod_producto', 'like', "%{$q}%")
                  ->orWhere('nombre', 'like', "%{$q}%");
            });
        }

        $rows = $query->paginate($perPage);

        return LineaCreditoResource::collection($rows)
            ->additional(['status' => 'success']);
    }

    /**
     * GET /creditos/lineas/{id}
     */
    public function show(int $id)
    {
        $prod = CreProducto::select([
                'id', 'id_fondo', 'cod_producto', 'nombre', 'descripcion',
                'monto_maximo', 'tasa_interes', 'dias_calculo', 'porcentaje_mora',
                'dias_de_gracias', 'tipo_mora', 'tipo_calculo',
                'estado',
            ])
            ->findOrFail($id);

        return (new LineaCreditoResource($prod))
            ->additional(['status' => 'success']);
    }

    /**
     * GET /creditos/lineas/by-code/{code}
     */
    public function byCode(string $code)
    {
        $prod = CreProducto::select([
                'id', 'id_fondo', 'cod_producto', 'nombre', 'descripcion',
                'monto_maximo', 'tasa_interes', 'dias_calculo', 'porcentaje_mora',
                'dias_de_gracias', 'tipo_mora', 'tipo_calculo',
                'estado',
            ])
            ->where('cod_producto', $code)
            ->firstOrFail();

        return (new LineaCreditoResource($prod))
            ->additional(['status' => 'success']);
    }
}
