<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ReciboCreditoIndiviudal
 * 
 * @property int $CODKAR
 * @property string $ccodcta
 * @property string $recibo
 * @property int $ciclo
 * @property Carbon $fecha
 * @property float $monto
 * @property int $numcuota
 * @property string $CCONCEP
 * @property string $ccodusu
 * @property string $estado
 * @property Carbon|null $dfecsis
 * @property string|null $puesto
 *
 * @package App\Models
 */
class ReciboCreditoIndiviudal extends Model
{
	protected $table = 'reciboCreditoIndiviudal';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'CODKAR' => 'int',
		'ciclo' => 'int',
		'fecha' => 'datetime',
		'monto' => 'float',
		'numcuota' => 'int',
		'dfecsis' => 'datetime'
	];

	protected $fillable = [
		'CODKAR',
		'ccodcta',
		'recibo',
		'ciclo',
		'fecha',
		'monto',
		'numcuota',
		'CCONCEP',
		'ccodusu',
		'estado',
		'dfecsis',
		'puesto'
	];
}
