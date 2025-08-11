<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class CvEmisor
 * 
 * @property int $id
 * @property int|null $id_afiliacion_iva
 * @property string|null $cod_establecimiento
 * @property string|null $correo
 * @property string|null $nit
 * @property string|null $nombre_comercial
 * @property string|null $nombre
 * @property string|null $direccion
 * @property string|null $codigo_postal
 * @property string|null $municipio
 * @property string|null $departamento
 * @property string|null $pais
 * @property int|null $estado
 * @property Carbon|null $created_at
 * @property int|null $created_by
 * @property Carbon|null $updated_at
 * @property int|null $updated_by
 * @property string|null $deleted_at
 * @property int|null $deleted_by
 * 
 * @property CvTipoAfiliacionIva|null $cv_tipo_afiliacion_iva
 * @property Collection|CvFactura[] $cv_facturas
 *
 * @package App\Models
 */
class CvEmisor extends Model
{
	use SoftDeletes;
	protected $table = 'cv_emisor';

	protected $casts = [
		'id_afiliacion_iva' => 'int',
		'estado' => 'int',
		'created_by' => 'int',
		'updated_by' => 'int',
		'deleted_by' => 'int'
	];

	protected $fillable = [
		'id_afiliacion_iva',
		'cod_establecimiento',
		'correo',
		'nit',
		'nombre_comercial',
		'nombre',
		'direccion',
		'codigo_postal',
		'municipio',
		'departamento',
		'pais',
		'estado',
		'created_by',
		'updated_by',
		'deleted_by'
	];

	public function cv_tipo_afiliacion_iva()
	{
		return $this->belongsTo(CvTipoAfiliacionIva::class, 'id_afiliacion_iva');
	}

	public function cv_facturas()
	{
		return $this->hasMany(CvFactura::class, 'id_emisor');
	}
}
