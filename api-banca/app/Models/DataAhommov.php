<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DataAhommov
 * 
 * @property int $id_mov
 * @property int|null $correlativo
 * @property int $nnum
 * @property string $ccodaho
 * @property string $ccodcli
 * @property string|null $short_name
 * @property string $ctipope
 * @property Carbon $dfecope
 * @property string $cnumdoc
 * @property string $ctipdoc
 * @property float $monto
 * @property float $tasa
 * @property float|null $mincalc
 * @property string $tipcuenta
 * @property float|null $montooo
 *
 * @package App\Models
 */
class DataAhommov extends Model
{
	protected $table = 'data_ahommov';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_mov' => 'int',
		'correlativo' => 'int',
		'nnum' => 'int',
		'dfecope' => 'datetime',
		'monto' => 'float',
		'tasa' => 'float',
		'mincalc' => 'float',
		'montooo' => 'float'
	];

	protected $fillable = [
		'id_mov',
		'correlativo',
		'nnum',
		'ccodaho',
		'ccodcli',
		'short_name',
		'ctipope',
		'dfecope',
		'cnumdoc',
		'ctipdoc',
		'monto',
		'tasa',
		'mincalc',
		'tipcuenta',
		'montooo'
	];
}
