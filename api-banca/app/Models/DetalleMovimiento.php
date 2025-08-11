<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DetalleMovimiento
 * 
 * @property int $id
 * @property int|null $id_movimiento
 * @property int|null $id_denominacion
 * @property int|null $cantidad
 *
 * @package App\Models
 */
class DetalleMovimiento extends Model
{
	protected $table = 'detalle_movimiento';
	public $timestamps = false;

	protected $casts = [
		'id_movimiento' => 'int',
		'id_denominacion' => 'int',
		'cantidad' => 'int'
	];

	protected $fillable = [
		'id_movimiento',
		'id_denominacion',
		'cantidad'
	];
}
