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
 * Class CvReceptor
 * 
 * @property int $id
 * @property string|null $id_receptor
 * @property string|null $correo
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
 * @property Collection|CvFactura[] $cv_facturas
 *
 * @package App\Models
 */
class CvReceptor extends Model
{
	use SoftDeletes;
	protected $table = 'cv_receptor';

	protected $casts = [
		'estado' => 'int',
		'created_by' => 'int',
		'updated_by' => 'int',
		'deleted_by' => 'int'
	];

	protected $fillable = [
		'id_receptor',
		'correo',
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

	public function cv_facturas()
	{
		return $this->hasMany(CvFactura::class, 'id_receptor');
	}
}
