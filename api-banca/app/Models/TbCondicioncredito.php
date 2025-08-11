<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TbCondicioncredito
 * 
 * @property int $id
 * @property string $descripcion
 * @property int $min_dia
 * @property int $max_dia
 * @property string|null $cod_crediref
 *
 * @package App\Models
 */
class TbCondicioncredito extends Model
{
	protected $table = 'tb_condicioncredito';
	public $timestamps = false;

	protected $casts = [
		'min_dia' => 'int',
		'max_dia' => 'int'
	];

	protected $fillable = [
		'descripcion',
		'min_dia',
		'max_dia',
		'cod_crediref'
	];
}
