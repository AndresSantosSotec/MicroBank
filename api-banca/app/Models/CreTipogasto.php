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
 * Class CreTipogasto
 * 
 * @property int $id
 * @property int $id_nomenclatura
 * @property string $nombre_gasto
 * @property int|null $afecta_modulo
 * @property int $estado
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property string|null $deleted_by
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property CtbNomenclatura $ctb_nomenclatura
 * @property Collection|CreProductosGasto[] $cre_productos_gastos
 *
 * @package App\Models
 */
class CreTipogasto extends Model
{
	use SoftDeletes;
	protected $table = 'cre_tipogastos';

	protected $casts = [
		'id_nomenclatura' => 'int',
		'afecta_modulo' => 'int',
		'estado' => 'int'
	];

	protected $fillable = [
		'id_nomenclatura',
		'nombre_gasto',
		'afecta_modulo',
		'estado',
		'created_by',
		'updated_by',
		'deleted_by'
	];

	public function ctb_nomenclatura()
	{
		return $this->belongsTo(CtbNomenclatura::class, 'id_nomenclatura');
	}

	public function cre_productos_gastos()
	{
		return $this->hasMany(CreProductosGasto::class, 'id_tipo_deGasto');
	}
}
