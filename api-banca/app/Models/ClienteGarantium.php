<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ClienteGarantium
 * 
 * @property string $idcod_cliente
 * @property string $cod
 * @property string|null $short_name
 * @property string|null $tipocliente
 *
 * @package App\Models
 */
class ClienteGarantium extends Model
{
	protected $table = 'clienteGarantia';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'idcod_cliente',
		'cod',
		'short_name',
		'tipocliente'
	];
}
