<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TbCargoGrupo
 * 
 * @property int $id
 * @property string|null $nombre
 * @property string|null $descripcion
 *
 * @package App\Models
 */
class TbCargoGrupo extends Model
{
	protected $table = 'tb_cargo_grupo';
	public $timestamps = false;

	protected $fillable = [
		'nombre',
		'descripcion'
	];
}
