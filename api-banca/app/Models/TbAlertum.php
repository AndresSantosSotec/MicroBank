<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TbAlertum
 * 
 * @property int $id
 * @property string|null $puesto
 * @property string|null $tipo_alerta
 * @property string|null $mensaje
 * @property string|null $cod_aux
 * @property string|null $codDoc
 * @property string|null $proceso
 * @property int|null $estado
 * @property Carbon|null $fecha
 * @property int|null $created_by
 * @property int|null $updated_by
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class TbAlertum extends Model
{
	protected $table = 'tb_alerta';

	protected $casts = [
		'estado' => 'int',
		'fecha' => 'datetime',
		'created_by' => 'int',
		'updated_by' => 'int'
	];

	protected $fillable = [
		'puesto',
		'tipo_alerta',
		'mensaje',
		'cod_aux',
		'codDoc',
		'proceso',
		'estado',
		'fecha',
		'created_by',
		'updated_by'
	];
}
