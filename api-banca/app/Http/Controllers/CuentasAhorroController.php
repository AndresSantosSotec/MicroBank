<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Ahomctum;
use App\Http\Resources\CuentaAhorroResource;
use Carbon\Carbon;

class CuentasAhorroController extends Controller
{
    /**
     * GET /me/cuentas/ahorro
     * Params opcionales:
     *  - as_of: YYYY-MM-DD (fecha a la que se calcula el saldo). Por defecto: hoy (CURDATE()).
     *  - estado: 'A' | 'all'  (por defecto 'A' - activas)
     *  - per_page: int (por defecto 20)
     *  - q: string   (filtro por ccodaho o nombre)
     */
    public function mine(Request $request)
    {
        $user = $request->user();

        // Opción rápida: users.email == client_code
        $clientCode = $user->email;
        // Si ya usas users.client_code:
        // $clientCode = $user->client_code;

        $asOf    = $request->get('as_of');
        $estado  = $request->get('estado', 'A');
        $q       = trim((string) $request->get('q', ''));
        $perPage = (int) $request->get('per_page', 20);

        // Validar/normalizar fecha (si viene)
        $asOfDate = $asOf ? Carbon::parse($asOf)->toDateString() : now()->toDateString();

        $query = Ahomctum::query()
            ->from('ahomcta as cta')
            ->select([
                'cta.ccodaho',
                'cta.ccodcli',
                'cta.cnomaho',
                'cta.tasa',
                'cta.nlibreta',
                'cta.accountprg',
                'cta.monobj',
                'cta.estado',
            ])
            ->selectRaw("CASE WHEN cta.fecha_apertura IN ('0000-00-00','0000-00-00 00:00:00') THEN NULL ELSE cta.fecha_apertura END AS fecha_apertura")
            ->selectRaw("CASE WHEN cta.fecha_cancel IN ('0000-00-00','0000-00-00 00:00:00') THEN NULL ELSE cta.fecha_cancel END AS fecha_cancel")
            ->selectRaw("CASE WHEN cta.fecha_ult IN ('0000-00-00','0000-00-00 00:00:00') THEN NULL ELSE cta.fecha_ult END AS fecha_ult")
            ->selectRaw('calcular_saldo_aho_tipcuenta(cta.ccodaho, ?) AS saldo', [$asOfDate])
            ->whereRaw('TRIM(cta.ccodcli) = ?', [$clientCode])
            ->when($estado !== 'all', fn ($q) => $q->whereRaw('TRIM(cta.estado) = ?', [$estado]))
            ->when($q !== '', function ($query) use ($q) {
                $like = "%$q%";
                $query->where(function ($w) use ($like) {
                    $w->where('cta.ccodaho', 'like', $like)
                      ->orWhere('cta.cnomaho', 'like', $like);
                });
            })
            ->orderByRaw("CASE WHEN cta.fecha_ult IN ('0000-00-00','0000-00-00 00:00:00') THEN 1 ELSE 0 END ASC")
            ->orderByDesc(DB::raw('NULLIF(cta.fecha_ult, "0000-00-00")'))
            ->orderBy('cta.ccodaho');

        $rows = $query->paginate($perPage);

        return CuentaAhorroResource::collection($rows)
            ->additional([
                'status' => 'success',
                'as_of'  => $asOfDate,
            ]);
    }

    /**
     * (Opcional) GET /clientes/{client_code}/cuentas/ahorro
     * Útil para backoffice; misma lógica pero por código explícito.
     */
    public function byClient(Request $request, string $clientCode)
    {
        $asOf    = $request->get('as_of');
        $estado  = $request->get('estado', 'A');
        $q       = trim((string) $request->get('q', ''));
        $perPage = (int) $request->get('per_page', 20);
        $asOfDate = $asOf ? Carbon::parse($asOf)->toDateString() : now()->toDateString();

        $query = Ahomctum::query()
            ->from('ahomcta as cta')
            ->select([
                'cta.ccodaho','cta.ccodcli','cta.cnomaho','cta.tasa',
                'cta.nlibreta','cta.accountprg','cta.monobj','cta.estado',
            ])
            ->selectRaw("CASE WHEN cta.fecha_apertura IN ('0000-00-00','0000-00-00 00:00:00') THEN NULL ELSE cta.fecha_apertura END AS fecha_apertura")
            ->selectRaw("CASE WHEN cta.fecha_cancel IN ('0000-00-00','0000-00-00 00:00:00') THEN NULL ELSE cta.fecha_cancel END AS fecha_cancel")
            ->selectRaw("CASE WHEN cta.fecha_ult IN ('0000-00-00','0000-00-00 00:00:00') THEN NULL ELSE cta.fecha_ult END AS fecha_ult")
            ->selectRaw('calcular_saldo_aho_tipcuenta(cta.ccodaho, ?) AS saldo', [$asOfDate])
            ->whereRaw('TRIM(cta.ccodcli) = ?', [$clientCode])
            ->when($estado !== 'all', fn ($q) => $q->whereRaw('TRIM(cta.estado) = ?', [$estado]))
            ->when($q !== '', function ($query) use ($q) {
                $like = "%$q%";
                $query->where(function ($w) use ($like) {
                    $w->where('cta.ccodaho', 'like', $like)
                      ->orWhere('cta.cnomaho', 'like', $like);
                });
            })
            ->orderByRaw("CASE WHEN cta.fecha_ult IN ('0000-00-00','0000-00-00 00:00:00') THEN 1 ELSE 0 END ASC")
            ->orderByDesc(DB::raw('NULLIF(cta.fecha_ult, "0000-00-00")'))
            ->orderBy('cta.ccodaho');

        $rows = $query->paginate($perPage);

        return CuentaAhorroResource::collection($rows)
            ->additional(['status' => 'success','as_of' => $asOfDate]);
    }
}
