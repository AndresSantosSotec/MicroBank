<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TbTamañonegocioactivo
 * 
 * @property int $id_TamañoNegocioActivos
 * @property string $TamañoNegocioActivos
 *
 * @package App\Models
 */
class TbTamañonegocioactivo extends Model
{
	protected $table = 'tb_tamañonegocioactivos';
	protected $primaryKey = 'id_TamañoNegocioActivos';
	public $timestamps = false;

	protected $fillable = [
		'TamañoNegocioActivos'
	];
}
