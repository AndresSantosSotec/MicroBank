<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ReciboCreditoGrupal
 * 
 * @property int $CODKAR
 * @property string $CNUMING
 * @property Carbon $DFECPRO
 * @property float|null $NMONTO
 * @property string $NombreGrupo
 * @property string $CCodGrupo
 * @property int $NCiclo
 * @property string $CCONCEP
 * @property string $codigo_grupo
 * @property string $ccodusu
 * @property string $estado
 * @property Carbon|null $dfecsis
 *
 * @package App\Models
 */
class ReciboCreditoGrupal extends Model
{
	protected $table = 'reciboCreditoGrupal';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'CODKAR' => 'int',
		'DFECPRO' => 'datetime',
		'NMONTO' => 'float',
		'NCiclo' => 'int',
		'dfecsis' => 'datetime'
	];

	protected $fillable = [
		'CODKAR',
		'CNUMING',
		'DFECPRO',
		'NMONTO',
		'NombreGrupo',
		'CCodGrupo',
		'NCiclo',
		'CCONCEP',
		'codigo_grupo',
		'ccodusu',
		'estado',
		'dfecsis'
	];
}
