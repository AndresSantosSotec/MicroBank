<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CtbTipoPoliza
 * 
 * @property int $id
 * @property string $descripcion
 * @property string $abr
 *
 * @package App\Models
 */
class CtbTipoPoliza extends Model
{
	protected $table = 'ctb_tipo_poliza';
	public $timestamps = false;

	protected $fillable = [
		'descripcion',
		'abr'
	];
}
