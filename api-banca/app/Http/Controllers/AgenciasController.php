<?php

namespace App\Http\Controllers;

use App\Repositories\CatalogRepo;
use Illuminate\Http\Request;
use Throwable;

class AgenciasController extends Controller
{
    public function __construct(private CatalogRepo $repo)
    {
    }

    public function index(Request $request)
    {
        $limit = (int) $request->query('limit', 100);
        $limit = max(1, min(200, $limit));
        $q = $request->query('q');

        try {
            $data = $this->repo->getAgencias($limit, $q);

            return response()->json([
                'ok' => true,
                'data' => $data,
            ]);
        } catch (Throwable $e) {
            return response()->json([
                'ok' => false,
                'message' => 'Error al obtener agencias',
                'code' => $e->getCode(),
                'hint' => $e->getMessage(),
            ], 500);
        }
    }
}
