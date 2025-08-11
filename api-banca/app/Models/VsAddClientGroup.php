<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VsAddClientGroup
 * 
 * @property string $id
 * @property string $dpi
 * @property string|null $nombre
 * @property Carbon $fecha
 *
 * @package App\Models
 */
class VsAddClientGroup extends Model
{
	protected $table = 'vs_add_client_group';
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
