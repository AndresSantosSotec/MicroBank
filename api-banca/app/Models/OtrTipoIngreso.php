<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class OtrTipoIngreso
 * 
 * @property int $id
 * @property int|null $id_nomenclatura
 * @property string|null $nombre_gasto
 * @property int|null $tipo
 * @property string|null $tipoLinea
 * @property string|null $grupo
 * @property int|null $estado
 * @property int|null $created_by
 * @property int|null $updated_by
 * @property int|null $deleted_by
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 *
 * @package App\Models
 */
class OtrTipoIngreso extends Model
{
	use SoftDeletes;
	protected $table = 'otr_tipo_ingreso';

	protected $casts = [
		'id_nomenclatura' => 'int',
		'tipo' => 'int',
		'estado' => 'int',
		'created_by' => 'int',
		'updated_by' => 'int',
		'deleted_by' => 'int'
	];

	protected $fillable = [
		'id_nomenclatura',
		'nombre_gasto',
		'tipo',
		'tipoLinea',
		'grupo',
		'estado',
		'created_by',
		'updated_by',
		'deleted_by'
	];
}
