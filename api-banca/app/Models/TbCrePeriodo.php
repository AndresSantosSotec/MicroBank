<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TbCrePeriodo
 * 
 * @property int $id
 * @property string|null $descripcion
 * @property int|null $dias
 * @property string|null $cod_msplus
 * @property string|null $cod_crediref
 *
 * @package App\Models
 */
class TbCrePeriodo extends Model
{
	protected $table = 'tb_cre_periodos';
	public $timestamps = false;

	protected $casts = [
		'dias' => 'int'
	];

	protected $fillable = [
		'descripcion',
		'dias',
		'cod_msplus',
		'cod_crediref'
	];
}
