<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DiasCrePPG
 * 
 * @property int $cnrocuo
 * @property string $ccodcta
 * @property Carbon $dfecven
 * @property float $ncapita
 * @property float $ncappag
 * @property float $nintere
 * @property float $nintpag
 * @property float $NAhoProgra
 * @property int $AhoPrgPag
 * @property float $nintmor
 * @property float $nmorpag
 * @property float $OtrosPagos
 * @property float $OtrosPagosPag
 * @property int|null $DIAS
 * @property float $PagosTotal
 *
 * @package App\Models
 */
class DiasCrePPG extends Model
{
	protected $table = 'dias_CrePPG';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'cnrocuo' => 'int',
		'dfecven' => 'datetime',
		'ncapita' => 'float',
		'ncappag' => 'float',
		'nintere' => 'float',
		'nintpag' => 'float',
		'NAhoProgra' => 'float',
		'AhoPrgPag' => 'int',
		'nintmor' => 'float',
		'nmorpag' => 'float',
		'OtrosPagos' => 'float',
		'OtrosPagosPag' => 'float',
		'DIAS' => 'int',
		'PagosTotal' => 'float'
	];

	protected $fillable = [
		'cnrocuo',
		'ccodcta',
		'dfecven',
		'ncapita',
		'ncappag',
		'nintere',
		'nintpag',
		'NAhoProgra',
		'AhoPrgPag',
		'nintmor',
		'nmorpag',
		'OtrosPagos',
		'OtrosPagosPag',
		'DIAS',
		'PagosTotal'
	];
}
