<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CtbMese
 * 
 * @property int $id
 * @property int|null $id_agencia
 * @property int|null $num_mes
 * @property Carbon|null $anio
 * @property int|null $cierre
 * @property int|null $open_by
 * @property int|null $close_by
 * @property Carbon|null $open_at
 * @property Carbon|null $close_at
 *
 * @package App\Models
 */
class CtbMese extends Model
{
	protected $table = 'ctb_meses';
	public $timestamps = false;

	protected $casts = [
		'id_agencia' => 'int',
		'num_mes' => 'int',
		'anio' => 'datetime',
		'cierre' => 'int',
		'open_by' => 'int',
		'close_by' => 'int',
		'open_at' => 'datetime',
		'close_at' => 'datetime'
	];

	protected $fillable = [
		'id_agencia',
		'num_mes',
		'anio',
		'cierre',
		'open_by',
		'close_by',
		'open_at',
		'close_at'
	];
}
