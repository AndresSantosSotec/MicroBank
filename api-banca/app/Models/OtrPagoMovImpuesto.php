<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class OtrPagoMovImpuesto
 * 
 * @property int $id
 * @property int $id_tipo
 * @property int|null $id_movimiento
 * @property float|null $monto
 * 
 * @property OtrPagoMov|null $otr_pago_mov
 *
 * @package App\Models
 */
class OtrPagoMovImpuesto extends Model
{
	protected $table = 'otr_pago_mov_impuestos';
	public $timestamps = false;

	protected $casts = [
		'id_tipo' => 'int',
		'id_movimiento' => 'int',
		'monto' => 'float'
	];

	protected $fillable = [
		'id_tipo',
		'id_movimiento',
		'monto'
	];

	public function otr_pago_mov()
	{
		return $this->belongsTo(OtrPagoMov::class, 'id_movimiento');
	}
}
