<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TbEstadoclientecentralriesgo
 * 
 * @property int $id_EstadoClienteCentralRiesgo
 * @property string $EstadoClienteCentralRiesgo
 *
 * @package App\Models
 */
class TbEstadoclientecentralriesgo extends Model
{
	protected $table = 'tb_estadoclientecentralriesgo';
	protected $primaryKey = 'id_EstadoClienteCentralRiesgo';
	public $timestamps = false;

	protected $fillable = [
		'EstadoClienteCentralRiesgo'
	];
}
