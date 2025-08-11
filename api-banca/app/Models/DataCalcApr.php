<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DataCalcApr
 * 
 * @property string $ccodaport
 * @property string $tipcuenta
 * @property string|null $ccodcli
 * @property string|null $short_name
 * @property string $ctipope
 * @property Carbon $dfecope
 * @property Carbon|null $fechamin
 * @property string $cnumdoc
 * @property string $ctipdoc
 * @property float $monto
 * @property float $tasa
 * @property float $montooo
 * @property float|null $saldo
 * @property float|null $mincalc
 *
 * @package App\Models
 */
class DataCalcApr extends Model
{
	protected $table = 'data_calc_apr';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'dfecope' => 'datetime',
		'fechamin' => 'datetime',
		'monto' => 'float',
		'tasa' => 'float',
		'montooo' => 'float',
		'saldo' => 'float',
		'mincalc' => 'float'
	];

	protected $fillable = [
		'ccodaport',
		'tipcuenta',
		'ccodcli',
		'short_name',
		'ctipope',
		'dfecope',
		'fechamin',
		'cnumdoc',
		'ctipdoc',
		'monto',
		'tasa',
		'montooo',
		'saldo',
		'mincalc'
	];
}
