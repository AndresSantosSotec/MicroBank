<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class FiadorGaratium
 * 
 * @property string $idcod_cliente
 * @property string $cod
 * @property string|null $cliente
 *
 * @package App\Models
 */
class FiadorGaratium extends Model
{
	protected $table = 'fiadorGaratia';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'idcod_cliente',
		'cod',
		'cliente'
	];
}
