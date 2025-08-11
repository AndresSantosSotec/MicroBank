<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Ahomancom
 * 
 * @property int $id
 * @property int $cuenta
 *
 * @package App\Models
 */
class Ahomancom extends Model
{
	protected $table = 'ahomancom';
	public $timestamps = false;

	protected $casts = [
		'cuenta' => 'int'
	];

	protected $fillable = [
		'cuenta'
	];
}
