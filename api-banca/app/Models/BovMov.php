<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class BovMov
 * 
 * @property int $id
 * @property int $id_agencia
 * @property Carbon $fecha
 * @property float $monto
 * @property string $detalle
 * @property string $tip_mov
 * @property string $concepto
 * @property int $create_by
 * @property int|null $update_by
 * @property int|null $delete_by
 * @property Carbon $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 *
 * @package App\Models
 */
class BovMov extends Model
{
	use SoftDeletes;
	protected $table = 'bov_mov';

	protected $casts = [
		'id_agencia' => 'int',
		'fecha' => 'datetime',
		'monto' => 'float',
		'create_by' => 'int',
		'update_by' => 'int',
		'delete_by' => 'int'
	];

	protected $fillable = [
		'id_agencia',
		'fecha',
		'monto',
		'detalle',
		'tip_mov',
		'concepto',
		'create_by',
		'update_by',
		'delete_by'
	];
}
