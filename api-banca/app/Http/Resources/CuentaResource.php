<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CuentaAhorroResource extends JsonResource
{
    public function toArray($request)
    {
        // $this viene del alias cta.* y columnas calculadas
        return [
            'account_code'   => $this->ccodaho,        // número/ID de la cuenta
            'client_code'    => $this->ccodcli,        // código de cliente
            'holder_name'    => $this->cnomaho,        // nombre corto (si aplica)
            'state'          => $this->estado,         // A, C, etc.
            'opened_at'      => optional($this->fecha_apertura)->toDateString(),
            'closed_at'      => optional($this->fecha_cancel)->toDateString(),
            'last_tx_at'     => optional($this->fecha_ult)->toDateString(),
            'rate'           => $this->tasa,           // tasa de la cuenta (si aplica)
            'passbook'       => $this->nlibreta,       // libreta si aplica
            'program'        => $this->accountprg,     // clasificación interna si la usas
            'goal_amount'    => $this->monobj,         // monto objetivo (si aplica)
            // saldo calculado por la función de BD:
            'balance'        => (float) ($this->saldo ?? 0),
            // labels listos para UI (opcional)
            'balance_label'  => 'Q' . number_format((float) ($this->saldo ?? 0), 2, '.', ','),
        ];
    }
}
