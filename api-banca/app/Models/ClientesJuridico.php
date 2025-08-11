<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ClientesJuridico
 * 
 * @property string $id
 * @property string $dpi
 * @property string|null $nombre
 * @property Carbon $fecha
 *
 * @package App\Models
 */
class ClientesJuridico extends Model
{
	protected $table = 'clientes_juridicos';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'fecha' => 'datetime'
	];

	protected $fillable = [
		'id',
		'dpi',
		'nombre',
		'fecha'
	];
}
