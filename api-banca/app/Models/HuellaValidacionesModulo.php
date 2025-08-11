<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class HuellaValidacionesModulo
 * 
 * @property int $id
 * @property string $descripcion
 * @property int $estado
 *
 * @package App\Models
 */
class HuellaValidacionesModulo extends Model
{
	protected $table = 'huella_validaciones_modulos';
	public $timestamps = false;

	protected $casts = [
		'estado' => 'int'
	];

	protected $fillable = [
		'descripcion',
		'estado'
	];
}
