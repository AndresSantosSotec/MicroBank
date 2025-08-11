<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CvTipoAfiliacionIva
 * 
 * @property int $id
 * @property string|null $abreviacion
 * @property string|null $descripcion
 * 
 * @property Collection|CvEmisor[] $cv_emisors
 *
 * @package App\Models
 */
class CvTipoAfiliacionIva extends Model
{
	protected $table = 'cv_tipo_afiliacion_iva';
	public $timestamps = false;

	protected $fillable = [
		'abreviacion',
		'descripcion'
	];

	public function cv_emisors()
	{
		return $this->hasMany(CvEmisor::class, 'id_afiliacion_iva');
	}
}
