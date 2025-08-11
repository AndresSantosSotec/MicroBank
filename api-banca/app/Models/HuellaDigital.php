<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class HuellaDigital
 * 
 * @property int $id
 * @property string $id_persona
 * @property string $mano
 * @property string $dedo
 * @property string $imgHuella
 * @property string $huella
 * @property int $estado
 * @property int $tipo_persona
 * @property int $created_by
 * @property int|null $updated_by
 * @property int|null $deleted_by
 * @property Carbon $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 *
 * @package App\Models
 */
class HuellaDigital extends Model
{
	use SoftDeletes;
	protected $table = 'huella_digital';

	protected $casts = [
		'estado' => 'int',
		'tipo_persona' => 'int',
		'created_by' => 'int',
		'updated_by' => 'int',
		'deleted_by' => 'int'
	];

	protected $fillable = [
		'id_persona',
		'mano',
		'dedo',
		'imgHuella',
		'huella',
		'estado',
		'tipo_persona',
		'created_by',
		'updated_by',
		'deleted_by'
	];
}
