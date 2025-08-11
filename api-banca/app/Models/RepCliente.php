<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RepCliente
 * 
 * @property string $cod
 * @property string $dpi
 * @property string|null $nombre
 *
 * @package App\Models
 */
class RepCliente extends Model
{
	protected $table = 'rep_cliente';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'cod',
		'dpi',
		'nombre'
	];
}
