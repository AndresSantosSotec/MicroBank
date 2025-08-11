<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DataAhomctum
 * 
 * @property string $ccodaho
 * @property string $ccodcli
 * @property string|null $estado
 * @property Carbon|null $fechamin
 *
 * @package App\Models
 */
class DataAhomctum extends Model
{
	protected $table = 'data_ahomcta';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'fechamin' => 'datetime'
	];

	protected $fillable = [
		'ccodaho',
		'ccodcli',
		'estado',
		'fechamin'
	];
}
