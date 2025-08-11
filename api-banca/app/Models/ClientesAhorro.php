<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ClientesAhorro
 * 
 * @property string $ccodaho
 * @property string $ccodcli
 * @property int|null $nlibreta
 * @property string $no_identifica
 * @property string $nombre
 * @property string|null $short_name
 *
 * @package App\Models
 */
class ClientesAhorro extends Model
{
	protected $table = 'clientesAhorros';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'nlibreta' => 'int'
	];

	protected $fillable = [
		'ccodaho',
		'ccodcli',
		'nlibreta',
		'no_identifica',
		'nombre',
		'short_name'
	];
}
