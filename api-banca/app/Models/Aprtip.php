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
 * Class Aprtip
 * 
 * @property int $id_tipo
 * @property string $ccodage
 * @property string $ccodtip
 * @property string $nombre
 * @property string $cdescripcion
 * @property float $tasa
 * @property int|null $numfront
 * @property int|null $front_ini
 * @property int|null $numdors
 * @property int|null $dors_ini
 * @property int|null $correlativo
 * @property int|null $xlibreta
 * @property int|null $ylibreta
 * @property int|null $dep
 * @property int|null $ret
 * @property string|null $tipcuen
 * @property float|null $mincalc
 * @property int|null $cuenta_aprmov
 * @property int|null $id_cuenta_contable
 * @property float|null $isr
 * @property int|null $estado
 * @property int|null $created_by
 * @property int|null $updated_by
 * @property int|null $deleted_by
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Collection|AprConfiguracionesInt[] $apr_configuraciones_ints
 *
 * @package App\Models
 */
class Aprtip extends Model
{
	use SoftDeletes;
	protected $table = 'aprtip';
	protected $primaryKey = 'id_tipo';

	protected $casts = [
		'tasa' => 'float',
		'numfront' => 'int',
		'front_ini' => 'int',
		'numdors' => 'int',
		'dors_ini' => 'int',
		'correlativo' => 'int',
		'xlibreta' => 'int',
		'ylibreta' => 'int',
		'dep' => 'int',
		'ret' => 'int',
		'mincalc' => 'float',
		'cuenta_aprmov' => 'int',
		'id_cuenta_contable' => 'int',
		'isr' => 'float',
		'estado' => 'int',
		'created_by' => 'int',
		'updated_by' => 'int',
		'deleted_by' => 'int'
	];

	protected $fillable = [
		'ccodage',
		'ccodtip',
		'nombre',
		'cdescripcion',
		'tasa',
		'numfront',
		'front_ini',
		'numdors',
		'dors_ini',
		'correlativo',
		'xlibreta',
		'ylibreta',
		'dep',
		'ret',
		'tipcuen',
		'mincalc',
		'cuenta_aprmov',
		'id_cuenta_contable',
		'isr',
		'estado',
		'created_by',
		'updated_by',
		'deleted_by'
	];

	public function apr_configuraciones_ints()
	{
		return $this->hasMany(AprConfiguracionesInt::class, 'producto_id');
	}
}
