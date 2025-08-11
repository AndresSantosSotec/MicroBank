<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TbConfigCre
 * 
 * @property int $id
 * @property string|null $config_name
 * @property int $estado
 * @property int|null $comentario
 *
 * @package App\Models
 */
class TbConfigCre extends Model
{
	protected $table = 'tb_configCre';
	public $timestamps = false;

	protected $casts = [
		'estado' => 'int',
		'comentario' => 'int'
	];

	protected $fillable = [
		'config_name',
		'estado',
		'comentario'
	];
}
