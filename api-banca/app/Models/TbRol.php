<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TbRol
 * 
 * @property int $id
 * @property string|null $nombre
 * @property string|null $siglas
 *
 * @package App\Models
 */
class TbRol extends Model
{
	protected $table = 'tb_rol';
	public $timestamps = false;

	protected $fillable = [
		'nombre',
		'siglas'
	];
}
