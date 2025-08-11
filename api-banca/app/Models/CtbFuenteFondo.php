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
 * Class CtbFuenteFondo
 * 
 * @property int $id
 * @property string $descripcion
 * @property int $id_usuario
 * @property string $estado
 * @property Carbon $dfecmod
 * @property string|null $deleted_at
 * 
 * @property TbUsuario $tb_usuario
 * @property Collection|CreProducto[] $cre_productos
 * @property Collection|CtbMov[] $ctb_movs
 * @property Collection|CtbMovConfig[] $ctb_mov_configs
 * @property Collection|Producto[] $productos
 *
 * @package App\Models
 */
class CtbFuenteFondo extends Model
{
	use SoftDeletes;
	protected $table = 'ctb_fuente_fondos';
	public $timestamps = false;

	protected $casts = [
		'id_usuario' => 'int',
		'dfecmod' => 'datetime'
	];

	protected $fillable = [
		'descripcion',
		'id_usuario',
		'estado',
		'dfecmod'
	];

	public function tb_usuario()
	{
		return $this->belongsTo(TbUsuario::class, 'id_usuario');
	}

	public function cre_productos()
	{
		return $this->hasMany(CreProducto::class, 'id_fondo');
	}

	public function ctb_movs()
	{
		return $this->hasMany(CtbMov::class, 'id_fuente_fondo');
	}

	public function ctb_mov_configs()
	{
		return $this->hasMany(CtbMovConfig::class, 'id_fondo');
	}

	public function productos()
	{
		return $this->hasMany(Producto::class, 'id_fondos');
	}
}
