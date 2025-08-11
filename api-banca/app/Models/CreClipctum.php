<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CreClipctum
 * 
 * @property int $id_clipcta
 * @property string $ccodcli
 * @property string $ccodcta
 * @property string $ctipel
 * @property Carbon $fchNow
 * @property int $codusu
 * @property int $estado
 *
 * @package App\Models
 */
class CreClipctum extends Model
{
	protected $table = 'cre_clipcta';
	protected $primaryKey = 'id_clipcta';
	public $timestamps = false;

	protected $casts = [
		'fchNow' => 'datetime',
		'codusu' => 'int',
		'estado' => 'int'
	];

	protected $fillable = [
		'ccodcli',
		'ccodcta',
		'ctipel',
		'fchNow',
		'codusu',
		'estado'
	];
}
