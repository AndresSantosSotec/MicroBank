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
 * Class CtbNomenclatura
 * 
 * @property int $id
 * @property string $ccodcta
 * @property string $cdescrip
 * @property string $tipo
 * @property Carbon|null $fecmod
 * @property string|null $id_tbusuario
 * @property int $estado
 * @property int|null $categoria_flujo
 * @property int|null $created_by
 * @property int|null $updated_by
 * @property int|null $deleted_by
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Collection|CreProducto[] $cre_productos
 * @property Collection|CreTipogasto[] $cre_tipogastos
 * @property Collection|CtbBanco[] $ctb_bancos
 * @property Collection|CtbMov[] $ctb_movs
 * @property Collection|CtbMovConfig[] $ctb_mov_configs
 * @property Collection|TbDocumentosTransaccione[] $tb_documentos_transacciones
 *
 * @package App\Models
 */
class CtbNomenclatura extends Model
{
	use SoftDeletes;
	protected $table = 'ctb_nomenclatura';

	protected $casts = [
		'fecmod' => 'datetime',
		'estado' => 'int',
		'categoria_flujo' => 'int',
		'created_by' => 'int',
		'updated_by' => 'int',
		'deleted_by' => 'int'
	];

	protected $fillable = [
		'ccodcta',
		'cdescrip',
		'tipo',
		'fecmod',
		'id_tbusuario',
		'estado',
		'categoria_flujo',
		'created_by',
		'updated_by',
		'deleted_by'
	];

	public function cre_productos()
	{
		return $this->hasMany(CreProducto::class, 'id_cuenta_otros');
	}

	public function cre_tipogastos()
	{
		return $this->hasMany(CreTipogasto::class, 'id_nomenclatura');
	}

	public function ctb_bancos()
	{
		return $this->hasMany(CtbBanco::class, 'id_nomenclatura');
	}

	public function ctb_movs()
	{
		return $this->hasMany(CtbMov::class, 'id_ctb_nomenclatura');
	}

	public function ctb_mov_configs()
	{
		return $this->hasMany(CtbMovConfig::class, 'cuenta_contable');
	}

	public function tb_documentos_transacciones()
	{
		return $this->hasMany(TbDocumentosTransaccione::class, 'id_cuenta_contable');
	}
}
