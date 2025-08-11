<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CtbSaldosBanco
 * 
 * @property int $id
 * @property int $id_cuenta_banco
 * @property int|null $mes
 * @property Carbon|null $anio
 * @property float|null $saldo_inicial
 * @property int|null $created_by
 * @property int|null $updated_by
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property CtbBanco $ctb_banco
 *
 * @package App\Models
 */
class CtbSaldosBanco extends Model
{
	protected $table = 'ctb_saldos_bancos';

	protected $casts = [
		'id_cuenta_banco' => 'int',
		'mes' => 'int',
		'anio' => 'datetime',
		'saldo_inicial' => 'float',
		'created_by' => 'int',
		'updated_by' => 'int'
	];

	protected $fillable = [
		'id_cuenta_banco',
		'mes',
		'anio',
		'saldo_inicial',
		'created_by',
		'updated_by'
	];

	public function ctb_banco()
	{
		return $this->belongsTo(CtbBanco::class, 'id_cuenta_banco');
	}
}
