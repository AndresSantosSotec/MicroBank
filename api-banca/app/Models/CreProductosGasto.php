<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class CreProductosGasto
 * 
 * @property int $id
 * @property int $id_producto
 * @property int $id_tipo_deGasto
 * @property int $tipo_deCobro
 * @property int $tipo_deMonto
 * @property int $calculox
 * @property float $monto
 * @property string|null $distribucion
 * @property int $estado
 * @property int|null $created_by
 * @property int|null $updated_by
 * @property int|null $deleted_by
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property CreProducto $cre_producto
 * @property CreTipogasto $cre_tipogasto
 *
 * @package App\Models
 */
class CreProductosGasto extends Model
{
	use SoftDeletes;
	protected $table = 'cre_productos_gastos';

	protected $casts = [
		'id_producto' => 'int',
		'id_tipo_deGasto' => 'int',
		'tipo_deCobro' => 'int',
		'tipo_deMonto' => 'int',
		'calculox' => 'int',
		'monto' => 'float',
		'estado' => 'int',
		'created_by' => 'int',
		'updated_by' => 'int',
		'deleted_by' => 'int'
	];

	protected $fillable = [
		'id_producto',
		'id_tipo_deGasto',
		'tipo_deCobro',
		'tipo_deMonto',
		'calculox',
		'monto',
		'distribucion',
		'estado',
		'created_by',
		'updated_by',
		'deleted_by'
	];

	public function cre_producto()
	{
		return $this->belongsTo(CreProducto::class, 'id_producto');
	}

	public function cre_tipogasto()
	{
		return $this->belongsTo(CreTipogasto::class, 'id_tipo_deGasto');
	}
}
