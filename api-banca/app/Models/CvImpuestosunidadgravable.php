<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CvImpuestosunidadgravable
 * 
 * @property int $id
 * @property int $codigo
 * @property string|null $nombre
 * @property string|null $nombre_corto
 * @property float|null $tasa_monto
 * @property int $id_cvimpuestostipo
 * 
 * @property CvImpuestosTipo $cv_impuestos_tipo
 * @property Collection|CvFacturaitemsImpuesto[] $cv_facturaitems_impuestos
 *
 * @package App\Models
 */
class CvImpuestosunidadgravable extends Model
{
	protected $table = 'cv_impuestosunidadgravable';
	public $timestamps = false;

	protected $casts = [
		'codigo' => 'int',
		'tasa_monto' => 'float',
		'id_cvimpuestostipo' => 'int'
	];

	protected $fillable = [
		'codigo',
		'nombre',
		'nombre_corto',
		'tasa_monto',
		'id_cvimpuestostipo'
	];

	public function cv_impuestos_tipo()
	{
		return $this->belongsTo(CvImpuestosTipo::class, 'id_cvimpuestostipo');
	}

	public function cv_facturaitems_impuestos()
	{
		return $this->hasMany(CvFacturaitemsImpuesto::class, 'id_impuestos_unidadgravable');
	}
}
