<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TbMenu
 * 
 * @property int $id
 * @property string|null $descripcion
 * @property string|null $estado
 * 
 * @property Collection|TbSubmenu[] $tb_submenus
 *
 * @package App\Models
 */
class TbMenu extends Model
{
	protected $table = 'tb_menus';
	public $timestamps = false;

	protected $fillable = [
		'descripcion',
		'estado'
	];

	public function tb_submenus()
	{
		return $this->hasMany(TbSubmenu::class, 'id_menu');
	}
}
