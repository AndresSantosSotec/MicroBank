<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ParametrosCredito
 * 
 * @property int $id
 * @property string $codprod
 * @property string $nomfondo
 * @property string $nombre
 * @property string $descripcion
 * @property float $interes
 * @property float $monto
 * @property int $dias
 * @property int $c1id
 * @property string $c1
 * @property string $cnom1
 * @property int $c2id
 * @property string $c2
 * @property string $cnom2
 * @property int $c3id
 * @property string $c3
 * @property string $cnom3
 *
 * @package App\Models
 */
class ParametrosCredito extends Model
{
	protected $table = 'parametros_creditos';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'interes' => 'float',
		'monto' => 'float',
		'dias' => 'int',
		'c1id' => 'int',
		'c2id' => 'int',
		'c3id' => 'int'
	];

	protected $fillable = [
		'id',
		'codprod',
		'nomfondo',
		'nombre',
		'descripcion',
		'interes',
		'monto',
		'dias',
		'c1id',
		'c1',
		'cnom1',
		'c2id',
		'c2',
		'cnom2',
		'c3id',
		'c3',
		'cnom3'
	];
}
