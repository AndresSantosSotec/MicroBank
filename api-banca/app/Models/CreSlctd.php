<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CreSlctd
 * 
 * @property int $id_crdts
 * @property int $NoCuenta
 * @property int $NoSlctd
 * @property Carbon $datDesmbls
 * @property int $IDasesor
 * @property string $agencia
 * @property int $estatus
 * @property float $montoSlctd
 * @property string $depa
 * @property string $muni
 * @property string $aldea
 * @property string $sctr_cnmc
 * @property float $ventas
 *
 * @package App\Models
 */
class CreSlctd extends Model
{
	protected $table = 'cre_Slctd';
	protected $primaryKey = 'id_crdts';
	public $timestamps = false;

	protected $casts = [
		'NoCuenta' => 'int',
		'NoSlctd' => 'int',
		'datDesmbls' => 'datetime',
		'IDasesor' => 'int',
		'estatus' => 'int',
		'montoSlctd' => 'float',
		'ventas' => 'float'
	];

	protected $fillable = [
		'NoCuenta',
		'NoSlctd',
		'datDesmbls',
		'IDasesor',
		'agencia',
		'estatus',
		'montoSlctd',
		'depa',
		'muni',
		'aldea',
		'sctr_cnmc',
		'ventas'
	];
}
