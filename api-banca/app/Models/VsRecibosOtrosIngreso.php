<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VsRecibosOtrosIngreso
 * 
 * @property int $id
 * @property Carbon|null $fecha
 * @property string|null $recibo
 * @property string|null $cliente
 * @property string|null $descripcion
 * @property int|null $ccodusu
 * @property int|null $estado
 * @property Carbon|null $dfecsis
 * @property string|null $file
 *
 * @package App\Models
 */
class VsRecibosOtrosIngreso extends Model
{
	protected $table = 'vs_recibos_otros_ingresos';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'fecha' => 'datetime',
		'ccodusu' => 'int',
		'estado' => 'int',
		'dfecsis' => 'datetime'
	];

	protected $fillable = [
		'id',
		'fecha',
		'recibo',
		'cliente',
		'descripcion',
		'ccodusu',
		'estado',
		'dfecsis',
		'file'
	];
}
