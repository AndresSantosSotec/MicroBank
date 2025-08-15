<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aprctum;
use App\Http\Resources\CuentaAportacionResource;
use Carbon\Carbon;

class CuentasAportacionesController extends Controller
{
    /**
     * GET /me/cuentas/aportaciones
     * Params:
     *  - as_of: YYYY-MM-DD (fecha para el cálculo del saldo). Default: hoy.
     *  - estado: 'A' | 'all'. Default: 'A'
     *  - q: filtro por código de cuenta (ccodaport)
     *  - per_page: int. Default: 20
     */
    public function mine(Request $request)
    {
        $user     = $request->user();
        $clientCode = $user->email; // o $user->client_code si ya lo tienes
        $asOf     = $request->get('as_of');
        $estado   = $request->get('estado', 'A');
        $q        = trim((string) $request->get('q', ''));
        $perPage  = (int) $request->get('per_page', 20);

        $asOfDate = $asOf ? Carbon::parse($asOf)->toDateString() : now()->toDateString();

        $query = Aprctum::query()
            ->from('aprcta as cta')
            ->select([
                'cta.id_cuenta',
                'cta.ccodaport',
                'cta.ccodcli',
                'cta.ccodtip',
                'cta.estado',
                'cta.fecha_apertura',
                'cta.fecha_cancel',
                'cta.fecha_ult',
                'cta.tasa',
                'cta.nlibreta',
                'cta.ret',
            ])
            ->selectRaw('calcular_saldo_apr_tipcuenta(cta.ccodaport, ?) as saldo', [$asOfDate])
            ->where('cta.ccodcli', $clientCode)
            ->orderByDesc('cta.fecha_ult');

        if ($estado !== 'all') {
            $query->where('cta.estado', $estado);
        }

        if ($q !== '') {
            $like = '%' . $q . '%';
            $query->where('cta.ccodaport', 'like', $like);
        }

        $rows = $query->paginate($perPage);

        return CuentaAportacionResource::collection($rows)
            ->additional([
                'status' => 'success',
                'as_of'  => $asOfDate,
            ]);
    }

    /**
     * (Opcional) GET /clientes/{client_code}/cuentas/aportaciones
     * Para backoffice o consultas administrativas.
     */
    public function byClient(Request $request, string $clientCode)
    {
        $asOf     = $request->get('as_of');
        $estado   = $request->get('estado', 'A');
        $q        = trim((string) $request->get('q', ''));
        $perPage  = (int) $request->get('per_page', 20);
        $asOfDate = $asOf ? Carbon::parse($asOf)->toDateString() : now()->toDateString();

        $query = Aprctum::query()
            ->from('aprcta as cta')
            ->select([
                'cta.id_cuenta','cta.ccodaport','cta.ccodcli','cta.ccodtip',
                'cta.estado','cta.fecha_apertura','cta.fecha_cancel','cta.fecha_ult',
                'cta.tasa','cta.nlibreta','cta.ret',
            ])
            ->selectRaw('calcular_saldo_apr_tipcuenta(cta.ccodaport, ?) as saldo', [$asOfDate])
            ->where('cta.ccodcli', $clientCode)
            ->orderByDesc('cta.fecha_ult');

        if ($estado !== 'all') {
            $query->where('cta.estado', $estado);
        }

        if ($q !== '') {
            $like = '%' . $q . '%';
            $query->where('cta.ccodaport', 'like', $like);
        }

        $rows = $query->paginate($perPage);

        return CuentaAportacionResource::collection($rows)
            ->additional(['status' => 'success', 'as_of' => $asOfDate]);
    }
}
