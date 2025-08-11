<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TbAutorizacion
 * 
 * @property int $id
 * @property int $id_usuario
 * @property int|null $id_rol
 * @property int|null $id_restringido
 * @property int|null $estado
 *
 * @package App\Models
 */
class TbAutorizacion extends Model
{
	protected $table = 'tb_autorizacion';
	public $timestamps = false;

	protected $casts = [
		'id_usuario' => 'int',
		'id_rol' => 'int',
		'id_restringido' => 'int',
		'estado' => 'int'
	];

	protected $fillable = [
		'id_usuario',
		'id_rol',
		'id_restringido',
		'estado'
	];
}
