<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TbTipoIngreso
 * 
 * @property int $id
 * @property int|null $id_nomencaltura
 * @property string|null $nombre_gasto
 * @property int|null $tipo
 *
 * @package App\Models
 */
class TbTipoIngreso extends Model
{
	protected $table = 'tb_tipo_ingreso';
	public $timestamps = false;

	protected $casts = [
		'id_nomencaltura' => 'int',
		'tipo' => 'int'
	];

	protected $fillable = [
		'id_nomencaltura',
		'nombre_gasto',
		'tipo'
	];
}
