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
 * Class CtbDiario
 * 
 * @property int $id
 * @property string $numcom
 * @property int $id_ctb_tipopoliza
 * @property int $id_tb_moneda
 * @property string $numdoc
 * @property string $glosa
 * @property Carbon $fecdoc
 * @property Carbon $feccnt
 * @property string $cod_aux
 * @property int $id_tb_usu
 * @property int|null $id_agencia
 * @property Carbon $fecmod
 * @property int $estado
 * @property int|null $editable
 * @property int|null $created_by
 * @property int|null $updated_by
 * @property int|null $deleted_by
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property CtbTipoPoliza $ctb_tipo_poliza
 * @property TbMoneda $tb_moneda
 * @property TbUsuario $tb_usuario
 * @property Collection|CtbBanMov[] $ctb_ban_movs
 * @property Collection|CtbChq[] $ctb_chqs
 * @property Collection|CtbMov[] $ctb_movs
 *
 * @package App\Models
 */
class CtbDiario extends Model
{
	use SoftDeletes;
	protected $table = 'ctb_diario';
	public $timestamps = false;

	protected $casts = [
		'id_ctb_tipopoliza' => 'int',
		'id_tb_moneda' => 'int',
		'fecdoc' => 'datetime',
		'feccnt' => 'datetime',
		'id_tb_usu' => 'int',
		'id_agencia' => 'int',
		'fecmod' => 'datetime',
		'estado' => 'int',
		'editable' => 'int',
		'created_by' => 'int',
		'updated_by' => 'int',
		'deleted_by' => 'int'
	];

	protected $fillable = [
		'numcom',
		'id_ctb_tipopoliza',
		'id_tb_moneda',
		'numdoc',
		'glosa',
		'fecdoc',
		'feccnt',
		'cod_aux',
		'id_tb_usu',
		'id_agencia',
		'fecmod',
		'estado',
		'editable',
		'created_by',
		'updated_by',
		'deleted_by'
	];

	public function ctb_tipo_poliza()
	{
		return $this->belongsTo(CtbTipoPoliza::class, 'id_ctb_tipopoliza');
	}

	public function tb_moneda()
	{
		return $this->belongsTo(TbMoneda::class, 'id_tb_moneda');
	}

	public function tb_usuario()
	{
		return $this->belongsTo(TbUsuario::class, 'id_tb_usu');
	}

	public function ctb_ban_movs()
	{
		return $this->hasMany(CtbBanMov::class, 'id_ctb_diario');
	}

	public function ctb_chqs()
	{
		return $this->hasMany(CtbChq::class, 'id_ctb_diario');
	}

	public function ctb_movs()
	{
		return $this->hasMany(CtbMov::class, 'id_ctb_diario');
	}
}
