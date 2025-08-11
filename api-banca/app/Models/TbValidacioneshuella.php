<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TbValidacioneshuella
 * 
 * @property int $id
 * @property int $estado
 * @property int $id_modulo
 *
 * @package App\Models
 */
class TbValidacioneshuella extends Model
{
	protected $table = 'tb_validacioneshuella';
	public $timestamps = false;

	protected $casts = [
		'estado' => 'int',
		'id_modulo' => 'int'
	];

	protected $fillable = [
		'estado',
		'id_modulo'
	];
}
