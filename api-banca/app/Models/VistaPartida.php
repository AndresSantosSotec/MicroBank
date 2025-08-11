<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VistaPartida
 * 
 * @property int $id
 * @property string $numcom
 * @property Carbon $feccnt
 * @property float|null $debe
 * @property float|null $haber
 * @property int|null $id_agencia
 * @property string $nom_agencia
 * @property string $glosa
 *
 * @package App\Models
 */
class VistaPartida extends Model
{
	protected $table = 'vista_partidas';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'feccnt' => 'datetime',
		'debe' => 'float',
		'haber' => 'float',
		'id_agencia' => 'int'
	];

	protected $fillable = [
		'id',
		'numcom',
		'feccnt',
		'debe',
		'haber',
		'id_agencia',
		'nom_agencia',
		'glosa'
	];
}
