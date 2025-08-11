<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Ahointeredetalle
 * 
 * @property int $id
 * @property string $tipo
 * @property string $rango
 * @property int $partida
 * @property int $acreditado
 * @property float $int_total
 * @property float $isr_total
 * @property Carbon $fecmod
 * @property string $codusu
 * @property Carbon|null $fechacorte
 *
 * @package App\Models
 */
class Ahointeredetalle extends Model
{
	protected $table = 'ahointeredetalle';
	public $timestamps = false;

	protected $casts = [
		'partida' => 'int',
		'acreditado' => 'int',
		'int_total' => 'float',
		'isr_total' => 'float',
		'fecmod' => 'datetime',
		'fechacorte' => 'datetime'
	];

	protected $fillable = [
		'tipo',
		'rango',
		'partida',
		'acreditado',
		'int_total',
		'isr_total',
		'fecmod',
		'codusu',
		'fechacorte'
	];
}
