<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DataAprmov
 * 
 * @property int $id_mov
 * @property int $nnum
 * @property string $ccodaport
 * @property string|null $ccodcli
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
class DataAprmov extends Model
{
	protected $table = 'data_aprmov';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_mov' => 'int',
		'nnum' => 'int',
		'dfecope' => 'datetime',
		'monto' => 'float',
		'tasa' => 'float',
		'mincalc' => 'float',
		'montooo' => 'float'
	];

	protected $fillable = [
		'id_mov',
		'nnum',
		'ccodaport',
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
