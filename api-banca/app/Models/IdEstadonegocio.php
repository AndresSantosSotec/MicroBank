<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class IdEstadonegocio
 * 
 * @property int $id_EstadoNegocio
 * @property string $EstadoNegocio
 *
 * @package App\Models
 */
class IdEstadonegocio extends Model
{
	protected $table = 'id_estadonegocio';
	protected $primaryKey = 'id_EstadoNegocio';
	public $timestamps = false;

	protected $fillable = [
		'EstadoNegocio'
	];
}
