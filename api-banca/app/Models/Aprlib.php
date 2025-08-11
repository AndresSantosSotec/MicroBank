<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Aprlib
 * 
 * @property int $id_lib
 * @property int $nlibreta
 * @property string $ccodaport
 * @property string $estado
 * @property Carbon|null $date_ini
 * @property Carbon|null $date_fin
 * @property string $ccodusu
 * @property string|null $crazon
 *
 * @package App\Models
 */
class Aprlib extends Model
{
	protected $table = 'aprlib';
	protected $primaryKey = 'id_lib';
	public $timestamps = false;

	protected $casts = [
		'nlibreta' => 'int',
		'date_ini' => 'datetime',
		'date_fin' => 'datetime'
	];

	protected $fillable = [
		'nlibreta',
		'ccodaport',
		'estado',
		'date_ini',
		'date_fin',
		'ccodusu',
		'crazon'
	];
}
