<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ClhpzzvbBdCoopeFape
 * 
 * @property int $Id_ppg
 * @property string $ccodcta
 * @property Carbon $dfecven
 * @property Carbon $dfecpag
 * @property string $cestado
 * @property string $ctipope
 * @property int $cnrocuo
 * @property float $SaldoCapital
 * @property float $nmorpag
 * @property float $ncappag
 * @property float $nintpag
 * @property int $AhoPrgPag
 * @property float $OtrosPagosPag
 * @property string $ccodusu
 * @property Carbon $dfecmod
 * @property string $cflag
 * @property string $codigo
 * @property string $creditosaf
 * @property float $saldo
 * @property float $nintmor
 * @property float $ncapita
 * @property float $nintere
 * @property float $NAhoProgra
 * @property float $OtrosPagos
 * @property int $delete_by
 * @property Carbon $delete_at
 *
 * @package App\Models
 */
class ClhpzzvbBdCoopeFape extends Model
{
	protected $table = 'clhpzzvb_bd_coope_fape';
	protected $primaryKey = 'Id_ppg';
	public $timestamps = false;

	protected $casts = [
		'dfecven' => 'datetime',
		'dfecpag' => 'datetime',
		'cnrocuo' => 'int',
		'SaldoCapital' => 'float',
		'nmorpag' => 'float',
		'ncappag' => 'float',
		'nintpag' => 'float',
		'AhoPrgPag' => 'int',
		'OtrosPagosPag' => 'float',
		'dfecmod' => 'datetime',
		'saldo' => 'float',
		'nintmor' => 'float',
		'ncapita' => 'float',
		'nintere' => 'float',
		'NAhoProgra' => 'float',
		'OtrosPagos' => 'float',
		'delete_by' => 'int',
		'delete_at' => 'datetime'
	];

	protected $fillable = [
		'ccodcta',
		'dfecven',
		'dfecpag',
		'cestado',
		'ctipope',
		'cnrocuo',
		'SaldoCapital',
		'nmorpag',
		'ncappag',
		'nintpag',
		'AhoPrgPag',
		'OtrosPagosPag',
		'ccodusu',
		'dfecmod',
		'cflag',
		'codigo',
		'creditosaf',
		'saldo',
		'nintmor',
		'ncapita',
		'nintere',
		'NAhoProgra',
		'OtrosPagos',
		'delete_by',
		'delete_at'
	];
}
