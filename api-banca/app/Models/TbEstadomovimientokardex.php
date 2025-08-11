<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TbEstadomovimientokardex
 * 
 * @property int $id_EstadoMovimientoKardex
 * @property string $EstadoMovimientoKardex
 *
 * @package App\Models
 */
class TbEstadomovimientokardex extends Model
{
	protected $table = 'tb_estadomovimientokardex';
	protected $primaryKey = 'id_EstadoMovimientoKardex';
	public $timestamps = false;

	protected $fillable = [
		'EstadoMovimientoKardex'
	];
}
