<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LineaCreditoResource extends JsonResource
{
    private function normalizePercent(?float $v): ?float
    {
        if ($v === null) return null;
        // Si viene 0.4 => 40; si ya viene 40 => 40
        return (abs($v) <= 1) ? $v * 100 : $v;
    }

    public function toArray($request)
    {
        $ratePct = $this->normalizePercent($this->tasa_interes);
        $moraPct = $this->normalizePercent($this->porcentaje_mora);

        return [
            'id'              => $this->id,
            'code'            => $this->cod_producto,
            'name'            => $this->nombre,
            'description'     => $this->descripcion,

            // numéricos “crudos”
            'rate'            => $ratePct,                 // ej. 40
            'amount_max'      => $this->monto_maximo,      // ej. 100000
            'grace_days'      => $this->dias_de_gracias,   // int
            'calc_days'       => $this->dias_calculo,      // int
            'late_fee_rate'   => $moraPct,                 // ej. 5
            'late_fee_type'   => $this->tipo_mora,         // int
            'calc_type'       => $this->tipo_calculo,      // int
            'estado'          => $this->estado,

            // labels para la UI (listo para pintar)
            'rate_label'      => $ratePct !== null ? number_format($ratePct, 2) . '%' : null,
            'amount_label'    => $this->monto_maximo !== null
                                    ? 'Q' . number_format($this->monto_maximo, 2, '.', ',')
                                    : null,
        ];
    }
}
