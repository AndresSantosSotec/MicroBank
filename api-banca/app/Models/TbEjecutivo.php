<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TbEjecutivo
 * 
 * @property int $id
 * @property int $rol
 * @property int|null $id_usuario
 * @property float $salario
 * 
 * @property TbUsuario|null $tb_usuario
 *
 * @package App\Models
 */
class TbEjecutivo extends Model
{
	protected $table = 'tb_ejecutivos';
	public $timestamps = false;

	protected $casts = [
		'rol' => 'int',
		'id_usuario' => 'int',
		'salario' => 'float'
	];

	protected $fillable = [
		'rol',
		'id_usuario',
		'salario'
	];

	public function tb_usuario()
	{
		return $this->belongsTo(TbUsuario::class, 'id_usuario');
	}
}
