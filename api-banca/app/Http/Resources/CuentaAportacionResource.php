<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CuentaAportacionResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'account_id'      => $this->id_cuenta,               // PK interno
            'account_code'    => $this->ccodaport,               // código visible de aportación
            'client_code'     => $this->ccodcli,                 // cliente
            'type_code'       => $this->ccodtip,                 // tipo (si lo usas)
            'state'           => $this->estado,                  // A/C/...
            'opened_at'       => optional($this->fecha_apertura)->toDateString(),
            'closed_at'       => optional($this->fecha_cancel)->toDateString(),
            'last_tx_at'      => optional($this->fecha_ult)->toDateString(),
            'rate'            => $this->tasa,
            'passbook'        => $this->nlibreta,
            'ret'             => $this->ret,                     // si aplica retiros permitidos
            // saldo calculado por la función:
            'balance'         => (float) ($this->saldo ?? 0),
            // helpers para UI:
            'balance_label'   => 'Q' . number_format((float) ($this->saldo ?? 0), 2, '.', ','),
        ];
    }
}
