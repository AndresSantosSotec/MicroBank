<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class INTEGRANTE
 * 
 * @property int $Codigo_grupo
 * @property string $cliente_id
 * @property string|null $compl_name
 * @property Carbon $date_birth
 * @property string $estado_civil
 * @property string $no_identifica
 * @property string $Direccion
 * @property string $depa_reside
 * @property string $muni_reside
 *
 * @package App\Models
 */
class INTEGRANTE extends Model
{
	protected $table = 'INTEGRANTES';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'Codigo_grupo' => 'int',
		'date_birth' => 'datetime'
	];

	protected $fillable = [
		'Codigo_grupo',
		'cliente_id',
		'compl_name',
		'date_birth',
		'estado_civil',
		'no_identifica',
		'Direccion',
		'depa_reside',
		'muni_reside'
	];
}
