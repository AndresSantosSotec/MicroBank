<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ParametrizacionAgencia
 * 
 * @property int $idAge
 * @property int $idNomen
 * @property string $cod
 * @property string $nom
 * @property string $cuenta
 * @property string $des
 *
 * @package App\Models
 */
class ParametrizacionAgencia extends Model
{
	protected $table = 'parametrizacionAgencias';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'idAge' => 'int',
		'idNomen' => 'int'
	];

	protected $fillable = [
		'idAge',
		'idNomen',
		'cod',
		'nom',
		'cuenta',
		'des'
	];
}
