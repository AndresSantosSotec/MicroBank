<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Garantiascliente
 * 
 * @property int $Id_GarantiasClient
 * @property string $Codigocli
 * @property string $documentorespal
 * @property string $cdescri
 * @property string $cdireccion
 * @property float $valorcomerc
 * @property float $montoavaluo
 * @property float $montoGravam
 * @property int $ccodgar
 * @property string $cestado
 * @property Carbon $destado
 * @property string $ctipdes
 * @property string $ctipgar
 * @property string $ccodzon
 * @property string $cmoneda
 * @property float $nmongar
 * @property float $nmontas
 * @property float $nmongra
 * @property string $csitgar
 * @property Carbon $dfecrev
 * @property string $ccodusu
 * @property Carbon $defecmod
 * @property string $cnudosi
 *
 * @package App\Models
 */
class Garantiascliente extends Model
{
	protected $table = 'garantiasclientes';
	protected $primaryKey = 'Id_GarantiasClient';
	public $timestamps = false;

	protected $casts = [
		'valorcomerc' => 'float',
		'montoavaluo' => 'float',
		'montoGravam' => 'float',
		'ccodgar' => 'int',
		'destado' => 'datetime',
		'nmongar' => 'float',
		'nmontas' => 'float',
		'nmongra' => 'float',
		'dfecrev' => 'datetime',
		'defecmod' => 'datetime'
	];

	protected $fillable = [
		'Codigocli',
		'documentorespal',
		'cdescri',
		'cdireccion',
		'valorcomerc',
		'montoavaluo',
		'montoGravam',
		'ccodgar',
		'cestado',
		'destado',
		'ctipdes',
		'ctipgar',
		'ccodzon',
		'cmoneda',
		'nmongar',
		'nmontas',
		'nmongra',
		'csitgar',
		'dfecrev',
		'ccodusu',
		'defecmod',
		'cnudosi'
	];
}
