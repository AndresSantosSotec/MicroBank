<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

        // IMPORTANTE: alias de tabla para poder referenciar en la función SQL
        $query = Ahomctum::query()
            ->from('ahomcta as cta')
            ->select([
                'cta.ccodaho',
                'cta.ccodcli',
                'cta.cnomaho',
                'cta.estado',
                'cta.fecha_apertura',
                'cta.fecha_cancel',
                'cta.fecha_ult',
                'cta.tasa',
                'cta.nlibreta',
                'cta.accountprg',
                'cta.monobj',
            ])
            // Llamada a la función en la base 'banana'
            // Nota: al usar el modelo Ahomctum, ya estamos en la conexión 'banana'
            ->selectRaw('calcular_saldo_aho_tipcuenta(cta.ccodaho, ?) as saldo', [$asOfDate])
            ->where('cta.ccodcli', $clientCode)
            ->orderByDesc('cta.fecha_ult');

        if ($estado !== 'all') {
            $query->where('cta.estado', $estado);
        }

        if ($q !== '') {
            $like = '%' . $q . '%';
            $query->where(function ($w) use ($like) {
                $w->where('cta.ccodaho', 'like', $like)
                  ->orWhere('cta.cnomaho', 'like', $like);
            });
        }

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
                'cta.ccodaho','cta.ccodcli','cta.cnomaho','cta.estado',
                'cta.fecha_apertura','cta.fecha_cancel','cta.fecha_ult',
                'cta.tasa','cta.nlibreta','cta.accountprg','cta.monobj',
            ])
            ->selectRaw('calcular_saldo_aho_tipcuenta(cta.ccodaho, ?) as saldo', [$asOfDate])
            ->where('cta.ccodcli', $clientCode)
            ->orderByDesc('cta.fecha_ult');

        if ($estado !== 'all') {
            $query->where('cta.estado', $estado);
        }
        if ($q !== '') {
            $like = '%' . $q . '%';
            $query->where(function ($w) use ($like) {
                $w->where('cta.ccodaho', 'like', $like)
                  ->orWhere('cta.cnomaho', 'like', $like);
            });
        }

        $rows = $query->paginate($perPage);

        return CuentaAhorroResource::collection($rows)
            ->additional(['status' => 'success','as_of' => $asOfDate]);
    }
}
