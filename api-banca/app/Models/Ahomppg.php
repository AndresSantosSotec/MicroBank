<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Ahomppg
 * 
 * @property int $id_registro
 * @property string $ccodaho
 * @property Carbon $fecven
 * @property string $estado
 * @property int $nrocuo
 * @property float $monto
 * @property float $interes
 * @property float $montpag
 * @property float $intpag
 * @property string $usuario
 * @property Carbon $fecmod
 *
 * @package App\Models
 */
class Ahomppg extends Model
{
	protected $table = 'ahomppg';
	protected $primaryKey = 'id_registro';
	public $timestamps = false;

	protected $casts = [
		'fecven' => 'datetime',
		'nrocuo' => 'int',
		'monto' => 'float',
		'interes' => 'float',
		'montpag' => 'float',
		'intpag' => 'float',
		'fecmod' => 'datetime'
	];

	protected $fillable = [
		'ccodaho',
		'fecven',
		'estado',
		'nrocuo',
		'monto',
		'interes',
		'montpag',
		'intpag',
		'usuario',
		'fecmod'
	];
}
