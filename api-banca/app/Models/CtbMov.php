<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CtbMov
 * 
 * @property int $id
 * @property int $id_ctb_diario
 * @property string $numcom
 * @property int $id_fuente_fondo
 * @property int $id_ctb_nomenclatura
 * @property float $debe
 * @property float $haber
 * 
 * @property CtbFuenteFondo $ctb_fuente_fondo
 * @property CtbDiario $ctb_diario
 * @property CtbNomenclatura $ctb_nomenclatura
 *
 * @package App\Models
 */
class CtbMov extends Model
{
	protected $table = 'ctb_mov';
	public $timestamps = false;

	protected $casts = [
		'id_ctb_diario' => 'int',
		'id_fuente_fondo' => 'int',
		'id_ctb_nomenclatura' => 'int',
		'debe' => 'float',
		'haber' => 'float'
	];

	protected $fillable = [
		'id_ctb_diario',
		'numcom',
		'id_fuente_fondo',
		'id_ctb_nomenclatura',
		'debe',
		'haber'
	];

	public function ctb_fuente_fondo()
	{
		return $this->belongsTo(CtbFuenteFondo::class, 'id_fuente_fondo');
	}

	public function ctb_diario()
	{
		return $this->belongsTo(CtbDiario::class, 'id_ctb_diario');
	}

	public function ctb_nomenclatura()
	{
		return $this->belongsTo(CtbNomenclatura::class, 'id_ctb_nomenclatura');
	}
}
