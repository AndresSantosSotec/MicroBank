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
 * Class OtrPago
 * 
 * @property int $id
 * @property Carbon|null $fecha
 * @property string|null $recibo
 * @property string|null $cliente
 * @property string|null $descripcion
 * @property int|null $agencia
 * @property int|null $estado
 * @property string|null $file
 * @property int|null $tipoadicional
 * @property int|null $created_by
 * @property int|null $updated_by
 * @property int|null $deleted_by
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Collection|OtrPagoMov[] $otr_pago_movs
 *
 * @package App\Models
 */
class OtrPago extends Model
{
	use SoftDeletes;
	protected $table = 'otr_pago';

	protected $casts = [
		'fecha' => 'datetime',
		'agencia' => 'int',
		'estado' => 'int',
		'tipoadicional' => 'int',
		'created_by' => 'int',
		'updated_by' => 'int',
		'deleted_by' => 'int'
	];

	protected $fillable = [
		'fecha',
		'recibo',
		'cliente',
		'descripcion',
		'agencia',
		'estado',
		'file',
		'tipoadicional',
		'created_by',
		'updated_by',
		'deleted_by'
	];

	public function otr_pago_movs()
	{
		return $this->hasMany(OtrPagoMov::class, 'id_otr_pago');
	}
}
