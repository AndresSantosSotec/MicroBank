<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CtbCuentasContable
 * 
 * @property int $id
 * @property string $descripcion
 *
 * @package App\Models
 */
class CtbCuentasContable extends Model
{
	protected $table = 'ctb_cuentas_contables';
	public $timestamps = false;

	protected $fillable = [
		'descripcion'
	];
}
