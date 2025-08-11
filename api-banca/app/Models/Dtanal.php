<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Dtanal
 * 
 * @property string $CodCli
 * @property float $MonSug
 * @property string $CtipCre
 * @property string $noPeriodo
 * @property string $Dictamen
 * @property string $CCODCTA
 * @property Carbon|null $DfecDsbls
 * @property Carbon $DfecPago
 * @property float $MontoSol
 * @property string $CodAnal
 * @property string $CODAgencia
 * @property string $NtipPerC
 * @property float $NIntApro
 * @property string $ccodprdct
 * @property string $AHOFIA
 * @property int $MontoMAx
 * @property string $descriprod
 * @property float $TasaInteres
 * @property bool $AddFiador
 * @property string $nnompro
 * @property float|null $Prc_aho
 * @property float|null $prc_mor
 * @property float $P_ahoCr
 *
 * @package App\Models
 */
class Dtanal extends Model
{
	protected $table = 'dtanal';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'MonSug' => 'float',
		'DfecDsbls' => 'datetime',
		'DfecPago' => 'datetime',
		'MontoSol' => 'float',
		'NIntApro' => 'float',
		'MontoMAx' => 'int',
		'TasaInteres' => 'float',
		'AddFiador' => 'bool',
		'Prc_aho' => 'float',
		'prc_mor' => 'float',
		'P_ahoCr' => 'float'
	];

	protected $fillable = [
		'CodCli',
		'MonSug',
		'CtipCre',
		'noPeriodo',
		'Dictamen',
		'CCODCTA',
		'DfecDsbls',
		'DfecPago',
		'MontoSol',
		'CodAnal',
		'CODAgencia',
		'NtipPerC',
		'NIntApro',
		'ccodprdct',
		'AHOFIA',
		'MontoMAx',
		'descriprod',
		'TasaInteres',
		'AddFiador',
		'nnompro',
		'Prc_aho',
		'prc_mor',
		'P_ahoCr'
	];
}
