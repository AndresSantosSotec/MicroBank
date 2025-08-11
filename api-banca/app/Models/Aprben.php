<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Aprben
 * 
 * @property int $id_ben
 * @property string $codaport
 * @property string $nombre
 * @property string $dpi
 * @property string $direccion
 * @property int $codparent
 * @property Carbon $fecnac
 * @property float $porcentaje
 * @property string $telefono
 *
 * @package App\Models
 */
class Aprben extends Model
{
	protected $table = 'aprben';
	protected $primaryKey = 'id_ben';
	public $timestamps = false;

	protected $casts = [
		'codparent' => 'int',
		'fecnac' => 'datetime',
		'porcentaje' => 'float'
	];

	protected $fillable = [
		'codaport',
		'nombre',
		'dpi',
		'direccion',
		'codparent',
		'fecnac',
		'porcentaje',
		'telefono'
	];
}
