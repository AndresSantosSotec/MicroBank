<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class CtbMovConfig
 * 
 * @property int $id
 * @property string|null $no_unico
 * @property int|null $cuenta_contable
 * @property string|null $debe
 * @property string|null $haber
 * @property int|null $id_fondo
 * @property int|null $created_by
 * @property int|null $updated_by
 * @property int|null $deleted_by
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property string|null $deleted_at
 * @property int|null $id_config
 * 
 * @property CtbDiarioConfig|null $ctb_diario_config
 * @property CtbFuenteFondo|null $ctb_fuente_fondo
 * @property CtbNomenclatura|null $ctb_nomenclatura
 *
 * @package App\Models
 */
class CtbMovConfig extends Model
{
	use SoftDeletes;
	protected $table = 'ctb_mov_config';

	protected $casts = [
		'cuenta_contable' => 'int',
		'id_fondo' => 'int',
		'created_by' => 'int',
		'updated_by' => 'int',
		'deleted_by' => 'int',
		'id_config' => 'int'
	];

	protected $fillable = [
		'no_unico',
		'cuenta_contable',
		'debe',
		'haber',
		'id_fondo',
		'created_by',
		'updated_by',
		'deleted_by',
		'id_config'
	];

	public function ctb_diario_config()
	{
		return $this->belongsTo(CtbDiarioConfig::class, 'id_config');
	}

	public function ctb_fuente_fondo()
	{
		return $this->belongsTo(CtbFuenteFondo::class, 'id_fondo');
	}

	public function ctb_nomenclatura()
	{
		return $this->belongsTo(CtbNomenclatura::class, 'cuenta_contable');
	}
}
