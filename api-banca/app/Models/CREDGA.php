<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CREDGA
 * 
 * @property int $id_CodGas
 * @property string $CtaConta
 * @property string $Gasto_name
 * @property string $TipodeCobro
 * @property string $TipoMonto
 * @property float $MontoGasto
 * @property string $id_prodcut
 * @property bool $EstadoGas
 * @property string $CodUsu
 * @property Carbon $FechaCre
 *
 * @package App\Models
 */
class CREDGA extends Model
{
	protected $table = 'CREDGAS';
	protected $primaryKey = 'id_CodGas';
	public $timestamps = false;

	protected $casts = [
		'MontoGasto' => 'float',
		'EstadoGas' => 'bool',
		'FechaCre' => 'datetime'
	];

	protected $fillable = [
		'CtaConta',
		'Gasto_name',
		'TipodeCobro',
		'TipoMonto',
		'MontoGasto',
		'id_prodcut',
		'EstadoGas',
		'CodUsu',
		'FechaCre'
	];
}
