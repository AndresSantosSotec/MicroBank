<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VsRecibosAportacione
 * 
 * @property int $id
 * @property string $cnumdoc
 * @property string $ccodaport
 * @property string $crazon
 * @property Carbon $dfecope
 * @property string $ctipdoc
 * @property float $monto
 * @property string|null $ccodusu
 * @property int|null $estado
 * @property Carbon|null $dfecsis
 *
 * @package App\Models
 */
class VsRecibosAportacione extends Model
{
	protected $table = 'vs_recibos_aportaciones';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'dfecope' => 'datetime',
		'monto' => 'float',
		'estado' => 'int',
		'dfecsis' => 'datetime'
	];

	protected $fillable = [
		'id',
		'cnumdoc',
		'ccodaport',
		'crazon',
		'dfecope',
		'ctipdoc',
		'monto',
		'ccodusu',
		'estado',
		'dfecsis'
	];
}
