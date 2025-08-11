<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VsClientesAll
 * 
 * @property string $id
 * @property string|null $nombre
 * @property string $dpi
 * @property Carbon $fecha
 *
 * @package App\Models
 */
class VsClientesAll extends Model
{
	protected $table = 'vs_clientes_all';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'fecha' => 'datetime'
	];

	protected $fillable = [
		'id',
		'nombre',
		'dpi',
		'fecha'
	];
}
