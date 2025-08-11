<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class HuellaTknAuto
 * 
 * @property int $id
 * @property int $codusu
 * @property string|null $token
 * @property string|null $hostname
 * @property int $estado
 * @property int|null $created_by
 * @property int|null $updated_by
 * @property int|null $deleted_by
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 *
 * @package App\Models
 */
class HuellaTknAuto extends Model
{
	use SoftDeletes;
	protected $table = 'huella_tkn_auto';

	protected $casts = [
		'codusu' => 'int',
		'estado' => 'int',
		'created_by' => 'int',
		'updated_by' => 'int',
		'deleted_by' => 'int'
	];

	protected $hidden = [
		'token'
	];

	protected $fillable = [
		'codusu',
		'token',
		'hostname',
		'estado',
		'created_by',
		'updated_by',
		'deleted_by'
	];
}
