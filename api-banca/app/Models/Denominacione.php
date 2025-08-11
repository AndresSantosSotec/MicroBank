<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Denominacione
 * 
 * @property int $id
 * @property int $id_moneda
 * @property float|null $monto
 * @property int|null $tipo
 *
 * @package App\Models
 */
class Denominacione extends Model
{
	protected $table = 'denominaciones';
	public $timestamps = false;

	protected $casts = [
		'id_moneda' => 'int',
		'monto' => 'float',
		'tipo' => 'int'
	];

	protected $fillable = [
		'id_moneda',
		'monto',
		'tipo'
	];
}
