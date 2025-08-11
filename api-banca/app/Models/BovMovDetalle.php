<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class BovMovDetalle
 * 
 * @property int $id
 * @property int $id_movimiento
 * @property int $id_denominacion
 * @property int $cantidad
 * @property string $create_by
 * @property string|null $update_by
 * @property string|null $delete_by
 * @property Carbon $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 *
 * @package App\Models
 */
class BovMovDetalle extends Model
{
	use SoftDeletes;
	protected $table = 'bov_mov_detalle';

	protected $casts = [
		'id_movimiento' => 'int',
		'id_denominacion' => 'int',
		'cantidad' => 'int'
	];

	protected $fillable = [
		'id_movimiento',
		'id_denominacion',
		'cantidad',
		'create_by',
		'update_by',
		'delete_by'
	];
}
