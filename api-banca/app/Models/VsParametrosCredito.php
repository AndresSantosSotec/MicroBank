<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class VsParametrosCredito
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
 * @property int $c4id
 * @property string $c4
 * @property string $cnom4
 *
 * @package App\Models
 */
class VsParametrosCredito extends Model
{
	protected $table = 'vs_parametros_creditos';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'interes' => 'float',
		'monto' => 'float',
		'dias' => 'int',
		'c1id' => 'int',
		'c2id' => 'int',
		'c3id' => 'int',
		'c4id' => 'int'
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
		'cnom3',
		'c4id',
		'c4',
		'cnom4'
	];
}
