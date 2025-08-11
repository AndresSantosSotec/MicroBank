<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Ahomcrt
 * 
 * @property int $id_crt
 * @property string $ccodcrt
 * @property string|null $ccodcli
 * @property string|null $num_nit
 * @property string $codaho
 * @property float $montoapr
 * @property int $plazo
 * @property float $interes
 * @property float|null $intcal
 * @property string|null $recibo
 * @property Carbon $fec_apertura
 * @property Carbon $fec_ven
 * @property Carbon $fec_liq
 * @property int $dia_gra
 * @property string $calint
 * @property int $pagint
 * @property int $codban
 * @property string $cuentaho
 * @property string $pignorado
 * @property string $codcta
 * @property string $liquidado
 * @property string|null $recibo_liquid
 * @property Carbon|null $fec_mod
 * @property string $codusu
 * @property bool|null $estado
 * @property Carbon|null $created_at
 * @property int|null $created_by
 * @property string|null $deleted_at
 * @property int|null $deleted_by
 *
 * @package App\Models
 */
class Ahomcrt extends Model
{
	use SoftDeletes;
	protected $table = 'ahomcrt';
	protected $primaryKey = 'id_crt';
	public $timestamps = false;

	protected $casts = [
		'montoapr' => 'float',
		'plazo' => 'int',
		'interes' => 'float',
		'intcal' => 'float',
		'fec_apertura' => 'datetime',
		'fec_ven' => 'datetime',
		'fec_liq' => 'datetime',
		'dia_gra' => 'int',
		'pagint' => 'int',
		'codban' => 'int',
		'fec_mod' => 'datetime',
		'estado' => 'bool',
		'created_by' => 'int',
		'deleted_by' => 'int'
	];

	protected $fillable = [
		'ccodcrt',
		'ccodcli',
		'num_nit',
		'codaho',
		'montoapr',
		'plazo',
		'interes',
		'intcal',
		'recibo',
		'fec_apertura',
		'fec_ven',
		'fec_liq',
		'dia_gra',
		'calint',
		'pagint',
		'codban',
		'cuentaho',
		'pignorado',
		'codcta',
		'liquidado',
		'recibo_liquid',
		'fec_mod',
		'codusu',
		'estado',
		'created_by',
		'deleted_by'
	];
}
