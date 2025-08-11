<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CtbCuentasApp
 * 
 * @property int $id
 * @property string $descripcion
 *
 * @package App\Models
 */
class CtbCuentasApp extends Model
{
	protected $table = 'ctb_cuentas_app';
	public $timestamps = false;

	protected $fillable = [
		'descripcion'
	];
}
