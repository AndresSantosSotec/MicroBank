<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ClientesReporte
 * 
 * @property string $id
 * @property string|null $nombre
 * @property string $dpi
 * @property Carbon $fecNac
 * @property string|null $tipocliente
 *
 * @package App\Models
 */
class ClientesReporte extends Model
{
	protected $table = 'clientesReporte';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'fecNac' => 'datetime'
	];

	protected $fillable = [
		'id',
		'nombre',
		'dpi',
		'fecNac',
		'tipocliente'
	];
}
