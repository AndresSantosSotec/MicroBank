<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TbPermiso
 * 
 * @property int $id
 * @property int|null $id_usuario
 * @property int|null $id_modulo
 * @property int|null $id_menu
 * @property int|null $id_submenu
 * 
 * @property TbSubmenu|null $tb_submenu
 * @property TbUsuario|null $tb_usuario
 *
 * @package App\Models
 */
class TbPermiso extends Model
{
	protected $table = 'tb_permisos';
	public $timestamps = false;

	protected $casts = [
		'id_usuario' => 'int',
		'id_modulo' => 'int',
		'id_menu' => 'int',
		'id_submenu' => 'int'
	];

	protected $fillable = [
		'id_usuario',
		'id_modulo',
		'id_menu',
		'id_submenu'
	];

	public function tb_submenu()
	{
		return $this->belongsTo(TbSubmenu::class, 'id_submenu');
	}

	public function tb_usuario()
	{
		return $this->belongsTo(TbUsuario::class, 'id_usuario');
	}
}
