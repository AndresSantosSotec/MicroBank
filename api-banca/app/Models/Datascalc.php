<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Datascalc
 * 
 * @property string $ccodaho
 * @property string $tipcuenta
 * @property string $ccodcli
 * @property string|null $short_name
 * @property string $ctipope
 * @property Carbon $dfecope
 * @property Carbon|null $fechamin
 * @property string $cnumdoc
 * @property string $ctipdoc
 * @property float $monto
 * @property float $tasa
 * @property float|null $montooo
 * @property float|null $saldo
 * @property float|null $mincalc
 *
 * @package App\Models
 */
class Datascalc extends Model
{
	protected $table = 'datascalc';
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
		'ccodaho',
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
