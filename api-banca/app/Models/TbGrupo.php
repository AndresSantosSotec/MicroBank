<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class TbGrupo
 * 
 * @property int $id_grupos
 * @property string $codigo_grupo
 * @property string $NombreGrupo
 * @property Carbon $fecha_sys
 * @property string $Depa
 * @property string $Muni
 * @property string|null $canton
 * @property string|null $direc
 * @property int $estado
 * @property int|null $created_by
 * @property int|null $updated_by
 * @property int|null $deleted_by
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property string|null $estadoGrupo
 * @property int|null $close_by
 * @property Carbon|null $close_at
 * @property int|null $open_by
 * @property Carbon|null $open_at
 *
 * @package App\Models
 */
class TbGrupo extends Model
{
	use SoftDeletes;
	protected $table = 'tb_grupo';
	protected $primaryKey = 'id_grupos';

	protected $casts = [
		'fecha_sys' => 'datetime',
		'estado' => 'int',
		'created_by' => 'int',
		'updated_by' => 'int',
		'deleted_by' => 'int',
		'close_by' => 'int',
		'close_at' => 'datetime',
		'open_by' => 'int',
		'open_at' => 'datetime'
	];

	protected $fillable = [
		'codigo_grupo',
		'NombreGrupo',
		'fecha_sys',
		'Depa',
		'Muni',
		'canton',
		'direc',
		'estado',
		'created_by',
		'updated_by',
		'deleted_by',
		'estadoGrupo',
		'close_by',
		'close_at',
		'open_by',
		'open_at'
	];
}
