<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CambiosPendiente
 * 
 * @property int $id
 * @property string $nombre
 * @property Carbon|null $ejecutado_en
 *
 * @package App\Models
 */
class CambiosPendiente extends Model
{
	protected $table = 'cambios_pendientes';
	public $timestamps = false;

	protected $casts = [
		'ejecutado_en' => 'datetime'
	];

	protected $fillable = [
		'nombre',
		'ejecutado_en'
	];
}
