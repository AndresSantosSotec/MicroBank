<?php

namespace App\Http\Controllers;

use App\Repositories\CatalogRepo;
use Illuminate\Http\Request;
use Throwable;

class CatalogosEconomicosController extends Controller
{
    public function __construct(private CatalogRepo $repo)
    {
    }

    public function sectores(Request $request)
    {
        $limit = (int) $request->query('limit', 100);
        $limit = max(1, $limit);

        try {
            $data = $this->repo->getSectoresEconomicos($limit);

            return response()->json([
                'ok' => true,
                'data' => $data,
            ]);
        } catch (Throwable $e) {
            return response()->json([
                'ok' => false,
                'message' => 'Error al obtener sectores económicos',
                'code' => $e->getCode(),
                'hint' => $e->getMessage(),
            ], 500);
        }
    }
}
