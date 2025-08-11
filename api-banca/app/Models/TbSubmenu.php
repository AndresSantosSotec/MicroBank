<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TbSubmenu
 * 
 * @property int $id
 * @property int|null $id_modulo
 * @property int|null $id_menu
 * @property string|null $condi
 * @property string|null $file
 * @property string|null $caption
 * @property int|null $desarrollo
 * @property int|null $estado
 * 
 * @property TbModulo|null $tb_modulo
 * @property TbMenu|null $tb_menu
 * @property Collection|TbPermiso[] $tb_permisos
 *
 * @package App\Models
 */
class TbSubmenu extends Model
{
	protected $table = 'tb_submenus';
	public $timestamps = false;

	protected $casts = [
		'id_modulo' => 'int',
		'id_menu' => 'int',
		'desarrollo' => 'int',
		'estado' => 'int'
	];

	protected $fillable = [
		'id_modulo',
		'id_menu',
		'condi',
		'file',
		'caption',
		'desarrollo',
		'estado'
	];

	public function tb_modulo()
	{
		return $this->belongsTo(TbModulo::class, 'id_modulo');
	}

	public function tb_menu()
	{
		return $this->belongsTo(TbMenu::class, 'id_menu');
	}

	public function tb_permisos()
	{
		return $this->hasMany(TbPermiso::class, 'id_submenu');
	}
}
