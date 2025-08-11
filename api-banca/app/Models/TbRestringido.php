<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TbRestringido
 * 
 * @property int $id
 * @property string|null $modulo_area
 * @property int|null $estado
 * @property int|null $clase
 * @property int|null $nivel
 *
 * @package App\Models
 */
class TbRestringido extends Model
{
	protected $table = 'tb_restringido';
	public $timestamps = false;

	protected $casts = [
		'estado' => 'int',
		'clase' => 'int',
		'nivel' => 'int'
	];

	protected $fillable = [
		'modulo_area',
		'estado',
		'clase',
		'nivel'
	];
}
