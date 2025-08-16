<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
                'cta.tasa',
                'cta.nlibreta',
                'cta.ret',
                'cta.estado',
            ])
            ->selectRaw("CASE WHEN cta.fecha_apertura IN ('0000-00-00','0000-00-00 00:00:00') THEN NULL ELSE cta.fecha_apertura END AS fecha_apertura")
            ->selectRaw("CASE WHEN cta.fecha_cancel IN ('0000-00-00','0000-00-00 00:00:00') THEN NULL ELSE cta.fecha_cancel END AS fecha_cancel")
            ->selectRaw("CASE WHEN cta.fecha_ult IN ('0000-00-00','0000-00-00 00:00:00') THEN NULL ELSE cta.fecha_ult END AS fecha_ult")
            ->selectRaw('calcular_saldo_apr_tipcuenta(cta.ccodaport, ?) AS saldo', [$asOfDate])
            ->whereRaw('TRIM(cta.ccodcli) = ?', [$clientCode])
            ->when($estado !== 'all', fn ($q) => $q->whereRaw('TRIM(cta.estado) = ?', [$estado]))
            ->when($q !== '', function ($query) use ($q) {
                $like = "%$q%";
                $query->where('cta.ccodaport', 'like', $like);
            })
            ->orderByRaw("CASE WHEN cta.fecha_ult IN ('0000-00-00','0000-00-00 00:00:00') THEN 1 ELSE 0 END ASC")
            ->orderByDesc(DB::raw('NULLIF(cta.fecha_ult, "0000-00-00")'))
            ->orderBy('cta.ccodaport');

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
                'cta.tasa','cta.nlibreta','cta.ret','cta.estado',
            ])
            ->selectRaw("CASE WHEN cta.fecha_apertura IN ('0000-00-00','0000-00-00 00:00:00') THEN NULL ELSE cta.fecha_apertura END AS fecha_apertura")
            ->selectRaw("CASE WHEN cta.fecha_cancel IN ('0000-00-00','0000-00-00 00:00:00') THEN NULL ELSE cta.fecha_cancel END AS fecha_cancel")
            ->selectRaw("CASE WHEN cta.fecha_ult IN ('0000-00-00','0000-00-00 00:00:00') THEN NULL ELSE cta.fecha_ult END AS fecha_ult")
            ->selectRaw('calcular_saldo_apr_tipcuenta(cta.ccodaport, ?) AS saldo', [$asOfDate])
            ->whereRaw('TRIM(cta.ccodcli) = ?', [$clientCode])
            ->when($estado !== 'all', fn ($q) => $q->whereRaw('TRIM(cta.estado) = ?', [$estado]))
            ->when($q !== '', function ($query) use ($q) {
                $like = "%$q%";
                $query->where('cta.ccodaport', 'like', $like);
            })
            ->orderByRaw("CASE WHEN cta.fecha_ult IN ('0000-00-00','0000-00-00 00:00:00') THEN 1 ELSE 0 END ASC")
            ->orderByDesc(DB::raw('NULLIF(cta.fecha_ult, "0000-00-00")'))
            ->orderBy('cta.ccodaport');

        $rows = $query->paginate($perPage);

        return CuentaAportacionResource::collection($rows)
            ->additional(['status' => 'success', 'as_of' => $asOfDate]);
    }
}
