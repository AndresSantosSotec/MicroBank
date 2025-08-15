<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Ahomctum
 *
 * @property string $ccodaho
 * @property string $ccodcli
 * @property string|null $num_nit
 * @property string|null $ccodcli2
 * @property int|null $nlibreta
 * @property string|null $estado
 * @property Carbon $fecha_apertura
 * @property Carbon|null $fecha_cancel
 * @property Carbon|null $fecha_ult
 * @property Carbon|null $fecha_mod
 * @property string $codigo_usu
 * @property int $correlativo
 * @property int $numlinea
 * @property float $tasa
 * @property string|null $cnomaho
 * @property string|null $accountprg
 * @property float|null $monobj
 * @property int|null $dep
 * @property int|null $ret
 * @property Carbon|null $fecini
 * @property Carbon|null $fecfin
 * @property int|null $frec
 * @property int|null $plazo
 * @property int|null $estrict
 * @property string|null $ctainteres
 * @property int|null $encargado
 * @property int|null $created_by
 * @property Carbon|null $created_at
 *
 * @package App\Models
 */
class Ahomctum extends Model
{
	protected $table = 'ahomcta';
	protected $primaryKey = 'ccodaho';
	public $incrementing = false;
	public $timestamps = false;
    protected $connection = 'banana';

	protected $casts = [
		'nlibreta' => 'int',
		'fecha_apertura' => 'datetime',
		'fecha_cancel' => 'datetime',
		'fecha_ult' => 'datetime',
		'fecha_mod' => 'datetime',
		'correlativo' => 'int',
		'numlinea' => 'int',
		'tasa' => 'float',
		'monobj' => 'float',
		'dep' => 'int',
		'ret' => 'int',
		'fecini' => 'datetime',
		'fecfin' => 'datetime',
		'frec' => 'int',
		'plazo' => 'int',
		'estrict' => 'int',
		'encargado' => 'int',
		'created_by' => 'int'
	];

	protected $fillable = [
		'ccodcli',
		'num_nit',
		'ccodcli2',
		'nlibreta',
		'estado',
		'fecha_apertura',
		'fecha_cancel',
		'fecha_ult',
		'fecha_mod',
		'codigo_usu',
		'correlativo',
		'numlinea',
		'tasa',
		'cnomaho',
		'accountprg',
		'monobj',
		'dep',
		'ret',
		'fecini',
		'fecfin',
		'frec',
		'plazo',
		'estrict',
		'ctainteres',
		'encargado',
		'created_by'
	];
}
