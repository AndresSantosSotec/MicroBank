<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class OtrPagoMov
 * 
 * @property int $id
 * @property int|null $id_otr_tipo_ingreso
 * @property int|null $id_otr_pago
 * @property float|null $monto
 * @property int|null $estado
 * @property int|null $created_by
 * @property int|null $updated_by
 * @property int|null $deleted_by
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property OtrPago|null $otr_pago
 * @property Collection|OtrPagoMovImpuesto[] $otr_pago_mov_impuestos
 *
 * @package App\Models
 */
class OtrPagoMov extends Model
{
	use SoftDeletes;
	protected $table = 'otr_pago_mov';

	protected $casts = [
		'id_otr_tipo_ingreso' => 'int',
		'id_otr_pago' => 'int',
		'monto' => 'float',
		'estado' => 'int',
		'created_by' => 'int',
		'updated_by' => 'int',
		'deleted_by' => 'int'
	];

	protected $fillable = [
		'id_otr_tipo_ingreso',
		'id_otr_pago',
		'monto',
		'estado',
		'created_by',
		'updated_by',
		'deleted_by'
	];

	public function otr_pago()
	{
		return $this->belongsTo(OtrPago::class, 'id_otr_pago');
	}

	public function otr_pago_mov_impuestos()
	{
		return $this->hasMany(OtrPagoMovImpuesto::class, 'id_movimiento');
	}
}
