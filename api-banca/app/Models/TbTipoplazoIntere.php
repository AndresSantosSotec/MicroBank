<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TbTipoplazoIntere
 * 
 * @property int $id
 * @property string $descripcion
 * @property int $dias
 *
 * @package App\Models
 */
class TbTipoplazoIntere extends Model
{
	protected $table = 'tb_tipoplazo_interes';
	public $timestamps = false;

	protected $casts = [
		'dias' => 'int'
	];

	protected $fillable = [
		'descripcion',
		'dias'
	];
}
