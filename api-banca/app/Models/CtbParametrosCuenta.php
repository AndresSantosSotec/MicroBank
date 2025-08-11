<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CtbParametrosCuenta
 * 
 * @property int $id
 * @property int $id_tipo
 * @property int $clase
 *
 * @package App\Models
 */
class CtbParametrosCuenta extends Model
{
	protected $table = 'ctb_parametros_cuentas';
	public $timestamps = false;

	protected $casts = [
		'id_tipo' => 'int',
		'clase' => 'int'
	];

	protected $fillable = [
		'id_tipo',
		'clase'
	];
}
