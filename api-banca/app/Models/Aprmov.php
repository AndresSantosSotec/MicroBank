<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Aprmov
 * 
 * @property int $id_mov
 * @property string $ccodaport
 * @property Carbon $dfecope
 * @property string $ctipope
 * @property string $cnumdoc
 * @property string $ctipdoc
 * @property string $crazon
 * @property string|null $concepto
 * @property int $nlibreta
 * @property string $nrochq
 * @property string $tipchq
 * @property Carbon|null $fechaBanco
 * @property int|null $idCuentaBanco
 * @property Carbon $dfeccomp
 * @property string $numpartida
 * @property float $monto
 * @property float|null $cuota_ingreso
 * @property string $lineaprint
 * @property int $numlinea
 * @property int|null $correlativo
 * @property Carbon|null $dfecmod
 * @property string|null $codusu
 * @property int|null $cestado
 * @property string|null $auxi
 * @property Carbon|null $created_at
 * @property string|null $created_by
 * @property string|null $deleted_at
 * @property string|null $deleted_by
 *
 * @package App\Models
 */
class Aprmov extends Model
{
	use SoftDeletes;
	protected $table = 'aprmov';
	protected $primaryKey = 'id_mov';
	public $timestamps = false;

	protected $casts = [
		'dfecope' => 'datetime',
		'nlibreta' => 'int',
		'fechaBanco' => 'datetime',
		'idCuentaBanco' => 'int',
		'dfeccomp' => 'datetime',
		'monto' => 'float',
		'cuota_ingreso' => 'float',
		'numlinea' => 'int',
		'correlativo' => 'int',
		'dfecmod' => 'datetime',
		'cestado' => 'int'
	];

	protected $fillable = [
		'ccodaport',
		'dfecope',
		'ctipope',
		'cnumdoc',
		'ctipdoc',
		'crazon',
		'concepto',
		'nlibreta',
		'nrochq',
		'tipchq',
		'fechaBanco',
		'idCuentaBanco',
		'dfeccomp',
		'numpartida',
		'monto',
		'cuota_ingreso',
		'lineaprint',
		'numlinea',
		'correlativo',
		'dfecmod',
		'codusu',
		'cestado',
		'auxi',
		'created_by',
		'deleted_by'
	];
}
