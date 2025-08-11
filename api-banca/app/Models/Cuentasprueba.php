<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cuentasprueba
 * 
 * @property int $id
 * @property string $cuenta
 * @property float $tasa
 *
 * @package App\Models
 */
class Cuentasprueba extends Model
{
	protected $table = 'cuentasprueba';
	public $timestamps = false;

	protected $casts = [
		'tasa' => 'float'
	];

	protected $fillable = [
		'cuenta',
		'tasa'
	];
}
