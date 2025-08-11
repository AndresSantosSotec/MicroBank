<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TbPermisos2
 * 
 * @property int $id
 * @property int|null $id_usuario
 * @property int|null $id_submenu
 * 
 * @property TbUsuario|null $tb_usuario
 *
 * @package App\Models
 */
class TbPermisos2 extends Model
{
	protected $table = 'tb_permisos2';
	public $timestamps = false;

	protected $casts = [
		'id_usuario' => 'int',
		'id_submenu' => 'int'
	];

	protected $fillable = [
		'id_usuario',
		'id_submenu'
	];

	public function tb_usuario()
	{
		return $this->belongsTo(TbUsuario::class, 'id_usuario');
	}
}
