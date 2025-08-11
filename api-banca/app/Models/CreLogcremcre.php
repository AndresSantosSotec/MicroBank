<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CreLogcremcre
 * 
 * @property int $id
 * @property string $ccodcta
 * @property string|null $status_ant
 * @property string|null $status_post
 * @property Carbon|null $fecha_fija
 * @property string|null $aux
 * @property Carbon|null $updated_at
 * @property int|null $updated_by
 *
 * @package App\Models
 */
class CreLogcremcre extends Model
{
	protected $table = 'cre_logcremcre';
	public $timestamps = false;

	protected $casts = [
		'fecha_fija' => 'datetime',
		'updated_by' => 'int'
	];

	protected $fillable = [
		'ccodcta',
		'status_ant',
		'status_post',
		'fecha_fija',
		'aux',
		'updated_by'
	];
}
