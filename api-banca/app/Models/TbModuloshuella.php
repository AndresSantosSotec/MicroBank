<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TbModuloshuella
 * 
 * @property int $id
 * @property string $descripcion
 *
 * @package App\Models
 */
class TbModuloshuella extends Model
{
	protected $table = 'tb_moduloshuella';
	public $timestamps = false;

	protected $fillable = [
		'descripcion'
	];
}
