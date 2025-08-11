<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CtbParametrosGeneral
 * 
 * @property int $id
 * @property int $id_tipo
 * @property string|null $descripcion
 * @property int|null $id_ctb_nomenclatura
 *
 * @package App\Models
 */
class CtbParametrosGeneral extends Model
{
	protected $table = 'ctb_parametros_general';
	public $timestamps = false;

	protected $casts = [
		'id_tipo' => 'int',
		'id_ctb_nomenclatura' => 'int'
	];

	protected $fillable = [
		'id_tipo',
		'descripcion',
		'id_ctb_nomenclatura'
	];
}
