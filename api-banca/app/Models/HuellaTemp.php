<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class HuellaTemp
 * 
 * @property int $id
 * @property string|null $pc_serial
 * @property string|null $huella
 * @property string|null $imgHuella
 * @property Carbon|null $fecha_creacion
 * @property Carbon|null $fecha_actualizacion
 * @property Carbon|null $update_time
 * @property string|null $texto
 * @property string|null $statusPlantilla
 * @property string|null $estado_lector
 * @property string|null $opc
 * @property string|null $serialSession
 * @property string|null $findCode
 * @property int|null $typeFindCode
 *
 * @package App\Models
 */
class HuellaTemp extends Model
{
	protected $table = 'huella_temp';
	public $timestamps = false;

	protected $casts = [
		'fecha_creacion' => 'datetime',
		'fecha_actualizacion' => 'datetime',
		'update_time' => 'datetime',
		'typeFindCode' => 'int'
	];

	protected $fillable = [
		'pc_serial',
		'huella',
		'imgHuella',
		'fecha_creacion',
		'fecha_actualizacion',
		'update_time',
		'texto',
		'statusPlantilla',
		'estado_lector',
		'opc',
		'serialSession',
		'findCode',
		'typeFindCode'
	];
}
