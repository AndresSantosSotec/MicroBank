<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TbBovedaAperturaCierre
 * 
 * @property int $id
 * @property int|null $id_boveda
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
class TbBovedaAperturaCierre extends Model
{
	protected $table = 'tb_boveda_apertura_cierre';

	protected $casts = [
		'id_boveda' => 'int',
		'saldo_inicial' => 'float',
		'saldo_final' => 'float',
		'fecha_apertura' => 'datetime',
		'fecha_cierre' => 'datetime',
		'estado' => 'int'
	];

	protected $fillable = [
		'id_boveda',
		'saldo_inicial',
		'saldo_final',
		'fecha_apertura',
		'fecha_cierre',
		'estado',
		'created_by',
		'updated_by'
	];
}
