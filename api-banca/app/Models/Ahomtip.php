<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Ahomtip
 * 
 * @property int $id_tipo
 * @property string $ccodofi
 * @property string $ccodtip
 * @property string $nombre
 * @property string $cdescripcion
 * @property float $tasa
 * @property int|null $diascalculo
 * @property string|null $tipcuen
 * @property float|null $mincalc
 * @property float $mindepo
 * @property int|null $numfront
 * @property int|null $front_ini
 * @property int|null $numdors
 * @property int|null $dors_ini
 * @property int|null $correlativo
 * @property int|null $xlibreta
 * @property int|null $ylibreta
 * @property int|null $id_cuenta_contable
 * @property int|null $inicioCalculo
 * @property int|null $estado
 * @property float|null $isr
 * @property int|null $created_by
 * @property int|null $updated_by
 * @property int|null $deleted_by
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Collection|AhoConfiguracionesInt[] $aho_configuraciones_ints
 *
 * @package App\Models
 */
class Ahomtip extends Model
{
	use SoftDeletes;
	protected $table = 'ahomtip';
	protected $primaryKey = 'id_tipo';

	protected $casts = [
		'tasa' => 'float',
		'diascalculo' => 'int',
		'mincalc' => 'float',
		'mindepo' => 'float',
		'numfront' => 'int',
		'front_ini' => 'int',
		'numdors' => 'int',
		'dors_ini' => 'int',
		'correlativo' => 'int',
		'xlibreta' => 'int',
		'ylibreta' => 'int',
		'id_cuenta_contable' => 'int',
		'inicioCalculo' => 'int',
		'estado' => 'int',
		'isr' => 'float',
		'created_by' => 'int',
		'updated_by' => 'int',
		'deleted_by' => 'int'
	];

	protected $fillable = [
		'ccodofi',
		'ccodtip',
		'nombre',
		'cdescripcion',
		'tasa',
		'diascalculo',
		'tipcuen',
		'mincalc',
		'mindepo',
		'numfront',
		'front_ini',
		'numdors',
		'dors_ini',
		'correlativo',
		'xlibreta',
		'ylibreta',
		'id_cuenta_contable',
		'inicioCalculo',
		'estado',
		'isr',
		'created_by',
		'updated_by',
		'deleted_by'
	];

	public function aho_configuraciones_ints()
	{
		return $this->hasMany(AhoConfiguracionesInt::class, 'producto_id');
	}
}
