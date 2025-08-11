<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Aprparaintere
 * 
 * @property int $id
 * @property int $id_tipo_cuenta
 * @property int $id_descript_intere
 * @property int $id_cuenta1
 * @property int $id_cuenta2
 * @property Carbon $dfecmod
 * @property int $id_usuario
 *
 * @package App\Models
 */
class Aprparaintere extends Model
{
	protected $table = 'aprparaintere';
	public $timestamps = false;

	protected $casts = [
		'id_tipo_cuenta' => 'int',
		'id_descript_intere' => 'int',
		'id_cuenta1' => 'int',
		'id_cuenta2' => 'int',
		'dfecmod' => 'datetime',
		'id_usuario' => 'int'
	];

	protected $fillable = [
		'id_tipo_cuenta',
		'id_descript_intere',
		'id_cuenta1',
		'id_cuenta2',
		'dfecmod',
		'id_usuario'
	];
}
