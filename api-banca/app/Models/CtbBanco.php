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
 * Class CtbBanco
 * 
 * @property int $id
 * @property int|null $id_banco
 * @property string|null $numcuenta
 * @property int|null $id_nomenclatura
 * @property int|null $correlativo
 * @property Carbon|null $dfecmod
 * @property int|null $estado
 * @property int|null $codusu
 * @property string|null $deleted_at
 * @property float|null $saldo_ini
 * 
 * @property TbBanco|null $tb_banco
 * @property CtbNomenclatura|null $ctb_nomenclatura
 * @property TbUsuario|null $tb_usuario
 * @property Collection|CtbBanMov[] $ctb_ban_movs
 * @property Collection|CtbChq[] $ctb_chqs
 * @property Collection|CtbSaldosBanco[] $ctb_saldos_bancos
 *
 * @package App\Models
 */
class CtbBanco extends Model
{
	use SoftDeletes;
	protected $table = 'ctb_bancos';
	public $timestamps = false;

	protected $casts = [
		'id_banco' => 'int',
		'id_nomenclatura' => 'int',
		'correlativo' => 'int',
		'dfecmod' => 'datetime',
		'estado' => 'int',
		'codusu' => 'int',
		'saldo_ini' => 'float'
	];

	protected $fillable = [
		'id_banco',
		'numcuenta',
		'id_nomenclatura',
		'correlativo',
		'dfecmod',
		'estado',
		'codusu',
		'saldo_ini'
	];

	public function tb_banco()
	{
		return $this->belongsTo(TbBanco::class, 'id_banco');
	}

	public function ctb_nomenclatura()
	{
		return $this->belongsTo(CtbNomenclatura::class, 'id_nomenclatura');
	}

	public function tb_usuario()
	{
		return $this->belongsTo(TbUsuario::class, 'codusu');
	}

	public function ctb_ban_movs()
	{
		return $this->hasMany(CtbBanMov::class, 'id_cuenta_banco');
	}

	public function ctb_chqs()
	{
		return $this->hasMany(CtbChq::class, 'id_cuenta_banco');
	}

	public function ctb_saldos_bancos()
	{
		return $this->hasMany(CtbSaldosBanco::class, 'id_cuenta_banco');
	}
}
