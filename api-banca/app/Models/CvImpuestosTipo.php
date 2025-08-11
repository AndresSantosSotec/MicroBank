<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CvImpuestosTipo
 * 
 * @property int $id
 * @property string|null $descripcion
 * @property string|null $observaciones
 * 
 * @property Collection|CvImpuestosunidadgravable[] $cv_impuestosunidadgravables
 *
 * @package App\Models
 */
class CvImpuestosTipo extends Model
{
	protected $table = 'cv_impuestos_tipo';
	public $timestamps = false;

	protected $fillable = [
		'descripcion',
		'observaciones'
	];

	public function cv_impuestosunidadgravables()
	{
		return $this->hasMany(CvImpuestosunidadgravable::class, 'id_cvimpuestostipo');
	}
}
