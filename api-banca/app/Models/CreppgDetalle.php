<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CreppgDetalle
 * 
 * @property int $id
 * @property int|null $id_tipo
 * @property int|null $id_creppg
 * @property float $monto
 * @property string|null $ccodcta
 *
 * @package App\Models
 */
class CreppgDetalle extends Model
{
	protected $table = 'creppg_detalle';
	public $timestamps = false;

	protected $casts = [
		'id_tipo' => 'int',
		'id_creppg' => 'int',
		'monto' => 'float'
	];

	protected $fillable = [
		'id_tipo',
		'id_creppg',
		'monto',
		'ccodcta'
	];
}
