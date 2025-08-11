<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TbMovimientosCaja
 * 
 * @property int $id
 * @property int|null $id_caja
 * @property float $total
 * @property int|null $tipo
 * @property int|null $detalle
 * @property int|null $cod_referencia
 * @property int|null $estado
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property int|null $created_by
 * @property int|null $updated_by
 *
 * @package App\Models
 */
class TbMovimientosCaja extends Model
{
	protected $table = 'tb_movimientos_caja';

	protected $casts = [
		'id_caja' => 'int',
		'total' => 'float',
		'tipo' => 'int',
		'detalle' => 'int',
		'cod_referencia' => 'int',
		'estado' => 'int',
		'created_by' => 'int',
		'updated_by' => 'int'
	];

	protected $fillable = [
		'id_caja',
		'total',
		'tipo',
		'detalle',
		'cod_referencia',
		'estado',
		'created_by',
		'updated_by'
	];
}
