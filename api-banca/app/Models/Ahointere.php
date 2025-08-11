<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Ahointere
 * 
 * @property int $idreg
 * @property string $codaho
 * @property string $codcli
 * @property string $nomcli
 * @property string $tipope
 * @property Carbon $fecope
 * @property string $numdoc
 * @property string $tipdoc
 * @property float $monto
 * @property float $saldo
 * @property float $saldoant
 * @property int $dias
 * @property float $tasa
 * @property float $intcal
 * @property float $isrcal
 * @property int $idcalc
 *
 * @package App\Models
 */
class Ahointere extends Model
{
	protected $table = 'ahointere';
	protected $primaryKey = 'idreg';
	public $timestamps = false;

	protected $casts = [
		'fecope' => 'datetime',
		'monto' => 'float',
		'saldo' => 'float',
		'saldoant' => 'float',
		'dias' => 'int',
		'tasa' => 'float',
		'intcal' => 'float',
		'isrcal' => 'float',
		'idcalc' => 'int'
	];

	protected $fillable = [
		'codaho',
		'codcli',
		'nomcli',
		'tipope',
		'fecope',
		'numdoc',
		'tipdoc',
		'monto',
		'saldo',
		'saldoant',
		'dias',
		'tasa',
		'intcal',
		'isrcal',
		'idcalc'
	];
}
