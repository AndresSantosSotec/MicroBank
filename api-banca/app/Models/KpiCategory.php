<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class KpiCategory
 * 
 * @property int $id
 * @property string $nombre
 * @property string $descripcion
 * @property float $monto_minimo
 * @property float $monto_maximo
 * @property int $estado
 * @property int|null $created_by
 * @property int|null $updated_by
 * @property int|null $deleted_by
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 *
 * @package App\Models
 */
class KpiCategory extends Model
{
	use SoftDeletes;
	protected $table = 'kpi_categorys';

	protected $casts = [
		'monto_minimo' => 'float',
		'monto_maximo' => 'float',
		'estado' => 'int',
		'created_by' => 'int',
		'updated_by' => 'int',
		'deleted_by' => 'int'
	];

	protected $fillable = [
		'nombre',
		'descripcion',
		'monto_minimo',
		'monto_maximo',
		'estado',
		'created_by',
		'updated_by',
		'deleted_by'
	];
}
