<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class TbClienteTbGrupo
 * 
 * @property int $id_grupo
 * @property int $Codigo_grupo
 * @property string $cliente_id
 * @property int|null $cod_cargo
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
class TbClienteTbGrupo extends Model
{
	use SoftDeletes;
	protected $table = 'tb_cliente_tb_grupo';
	protected $primaryKey = 'id_grupo';

	protected $casts = [
		'Codigo_grupo' => 'int',
		'cod_cargo' => 'int',
		'estado' => 'int',
		'created_by' => 'int',
		'updated_by' => 'int',
		'deleted_by' => 'int'
	];

	protected $fillable = [
		'Codigo_grupo',
		'cliente_id',
		'cod_cargo',
		'estado',
		'created_by',
		'updated_by',
		'deleted_by'
	];
}
