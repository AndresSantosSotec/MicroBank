<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TbModulo
 * 
 * @property int $id
 * @property string|null $descripcion
 * @property string|null $icon
 * @property string|null $ruta
 * @property string|null $rama
 * @property string|null $estado
 * 
 * @property Collection|TbSubmenu[] $tb_submenus
 *
 * @package App\Models
 */
class TbModulo extends Model
{
	protected $table = 'tb_modulos';
	public $timestamps = false;

	protected $fillable = [
		'descripcion',
		'icon',
		'ruta',
		'rama',
		'estado'
	];

	public function tb_submenus()
	{
		return $this->hasMany(TbSubmenu::class, 'id_modulo');
	}
}
