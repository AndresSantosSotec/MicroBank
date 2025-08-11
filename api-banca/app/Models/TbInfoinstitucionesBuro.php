<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TbInfoinstitucionesBuro
 * 
 * @property int $id
 * @property int|null $id_buro
 * @property int|null $id_institucion
 * @property string|null $codigo
 * 
 * @property TbBuroInstitucione|null $tb_buro_institucione
 * @property InfoCoperativa|null $info_coperativa
 *
 * @package App\Models
 */
class TbInfoinstitucionesBuro extends Model
{
	protected $table = 'tb_infoinstituciones_buro';
	public $timestamps = false;

	protected $casts = [
		'id_buro' => 'int',
		'id_institucion' => 'int'
	];

	protected $fillable = [
		'id_buro',
		'id_institucion',
		'codigo'
	];

	public function tb_buro_institucione()
	{
		return $this->belongsTo(TbBuroInstitucione::class, 'id_buro');
	}

	public function info_coperativa()
	{
		return $this->belongsTo(InfoCoperativa::class, 'id_institucion');
	}
}
