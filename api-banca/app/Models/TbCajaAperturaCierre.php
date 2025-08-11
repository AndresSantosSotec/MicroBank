<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TbCajaAperturaCierre
 * 
 * @property int $id
 * @property int|null $id_usuario
 * @property float $saldo_inicial
 * @property float $saldo_final
 * @property Carbon $fecha_apertura
 * @property Carbon|null $fecha_cierre
 * @property int $estado
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $created_by
 * @property string|null $updated_by
 *
 * @package App\Models
 */
class TbCajaAperturaCierre extends Model
{
	protected $table = 'tb_caja_apertura_cierre';

	protected $casts = [
		'id_usuario' => 'int',
		'saldo_inicial' => 'float',
		'saldo_final' => 'float',
		'fecha_apertura' => 'datetime',
		'fecha_cierre' => 'datetime',
		'estado' => 'int'
	];

	protected $fillable = [
		'id_usuario',
		'saldo_inicial',
		'saldo_final',
		'fecha_apertura',
		'fecha_cierre',
		'estado',
		'created_by',
		'updated_by'
	];
}
