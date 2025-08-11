<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Ahomben
 * 
 * @property int $id_ben
 * @property string $codaho
 * @property string $nombre
 * @property string $dpi
 * @property string $direccion
 * @property int $codparent
 * @property Carbon $fecnac
 * @property float $porcentaje
 * @property string $telefono
 * @property string|null $ccodcrt
 *
 * @package App\Models
 */
class Ahomben extends Model
{
	protected $table = 'ahomben';
	protected $primaryKey = 'id_ben';
	public $timestamps = false;

	protected $casts = [
		'codparent' => 'int',
		'fecnac' => 'datetime',
		'porcentaje' => 'float'
	];

	protected $fillable = [
		'codaho',
		'nombre',
		'dpi',
		'direccion',
		'codparent',
		'fecnac',
		'porcentaje',
		'telefono',
		'ccodcrt'
	];
}
