<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class AhoConfiguracionesInt
 * 
 * @property int $id
 * @property int $producto_id
 * @property string|null $tipo
 * @property int|null $periodo
 * @property bool|null $estado
 * @property int|null $created_by
 * @property int|null $updated_by
 * @property int|null $deleted_by
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Ahomtip $ahomtip
 *
 * @package App\Models
 */
class AhoConfiguracionesInt extends Model
{
	use SoftDeletes;
	protected $table = 'aho_configuraciones_int';

	protected $casts = [
		'producto_id' => 'int',
		'periodo' => 'int',
		'estado' => 'bool',
		'created_by' => 'int',
		'updated_by' => 'int',
		'deleted_by' => 'int'
	];

	protected $fillable = [
		'producto_id',
		'tipo',
		'periodo',
		'estado',
		'created_by',
		'updated_by',
		'deleted_by'
	];

	public function ahomtip()
	{
		return $this->belongsTo(Ahomtip::class, 'producto_id');
	}
}
