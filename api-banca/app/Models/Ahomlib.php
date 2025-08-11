<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Ahomlib
 * 
 * @property int $id_lib
 * @property int $nlibreta
 * @property string $ccodaho
 * @property string $estado
 * @property Carbon $date_ini
 * @property Carbon|null $date_fin
 * @property string $ccodusu
 * @property string $crazon
 *
 * @package App\Models
 */
class Ahomlib extends Model
{
	protected $table = 'ahomlib';
	protected $primaryKey = 'id_lib';
	public $timestamps = false;

	protected $casts = [
		'nlibreta' => 'int',
		'date_ini' => 'datetime',
		'date_fin' => 'datetime'
	];

	protected $fillable = [
		'nlibreta',
		'ccodaho',
		'estado',
		'date_ini',
		'date_fin',
		'ccodusu',
		'crazon'
	];
}
