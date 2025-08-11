<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class CtbDiarioConfig
 * 
 * @property int $id
 * @property int|null $id_tipo_poliza
 * @property string|null $titulo
 * @property string|null $descripcion
 * @property int|null $created_by
 * @property int|null $updated_by
 * @property int|null $deleted_by
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property bool $estado
 * 
 * @property Collection|CtbMovConfig[] $ctb_mov_configs
 *
 * @package App\Models
 */
class CtbDiarioConfig extends Model
{
	use SoftDeletes;
	protected $table = 'ctb_diario_config';

	protected $casts = [
		'id_tipo_poliza' => 'int',
		'created_by' => 'int',
		'updated_by' => 'int',
		'deleted_by' => 'int',
		'estado' => 'bool'
	];

	protected $fillable = [
		'id_tipo_poliza',
		'titulo',
		'descripcion',
		'created_by',
		'updated_by',
		'deleted_by',
		'estado'
	];

	public function ctb_mov_configs()
	{
		return $this->hasMany(CtbMovConfig::class, 'id_config');
	}
}
