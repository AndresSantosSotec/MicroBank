<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TbDiasLaborale
 * 
 * @property int $id
 * @property string|null $dia
 * @property int|null $laboral
 * @property int|null $id_dia_ajuste
 * @property int|null $producto
 * @property int|null $id_dia
 * @property int|null $Columna 7
 *
 * @package App\Models
 */
class TbDiasLaborale extends Model
{
	protected $table = 'tb_dias_laborales';
	public $timestamps = false;

	protected $casts = [
		'laboral' => 'int',
		'id_dia_ajuste' => 'int',
		'producto' => 'int',
		'id_dia' => 'int',
		'Columna 7' => 'int'
	];

	protected $fillable = [
		'dia',
		'laboral',
		'id_dia_ajuste',
		'producto',
		'id_dia',
		'Columna 7'
	];
}
