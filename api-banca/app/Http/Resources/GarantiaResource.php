<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class GarantiaResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id'              => $this->idGarantia,
            'client_code'     => $this->idCliente,
            'tipo_id'         => $this->idTipoGa,
            'tipo_doc_id'     => $this->idTipoDoc,
            'archivo'         => $this->archivo,
            'descripcion'     => $this->descripcionGarantia,
            'direccion'       => [
                'line1' => $this->direccion,
                'depa'  => $this->depa,
                'muni'  => $this->muni,
            ],
            'valor_comercial' => $this->valorComercial,
            'monto_avaluo'    => $this->montoAvaluo,
            'monto_gravamen'  => $this->montoGravamen,
            'fecha_creacion'  => optional($this->fechaCreacion)->toDateString(),
            'estado'          => $this->estado,
            'created_by'      => $this->created_by,
            'updated_by'      => $this->updated_by,
        ];
    }
}
