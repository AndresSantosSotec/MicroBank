<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Aprctb
 * 
 * @property int $id
 * @property int $id_tipo_cuenta
 * @property int $id_tipo_doc
 * @property int $id_cuenta1
 * @property int $id_cuenta2
 * @property Carbon $dfecmod
 * @property string $codusu
 *
 * @package App\Models
 */
class Aprctb extends Model
{
	protected $table = 'aprctb';
	public $timestamps = false;

	protected $casts = [
		'id_tipo_cuenta' => 'int',
		'id_tipo_doc' => 'int',
		'id_cuenta1' => 'int',
		'id_cuenta2' => 'int',
		'dfecmod' => 'datetime'
	];

	protected $fillable = [
		'id_tipo_cuenta',
		'id_tipo_doc',
		'id_cuenta1',
		'id_cuenta2',
		'dfecmod',
		'codusu'
	];
}
