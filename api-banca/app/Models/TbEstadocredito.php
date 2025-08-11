<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TbEstadocredito
 * 
 * @property string $id_EstadoCredito
 * @property string $EstadoCredito
 *
 * @package App\Models
 */
class TbEstadocredito extends Model
{
	protected $table = 'tb_estadocredito';
	protected $primaryKey = 'id_EstadoCredito';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'EstadoCredito'
	];
}
