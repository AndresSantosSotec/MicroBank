<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CvTiposdte
 * 
 * @property int $id
 * @property string|null $nombre
 * @property string|null $codigo
 * @property string|null $descripcion
 * 
 * @property Collection|CvFactura[] $cv_facturas
 *
 * @package App\Models
 */
class CvTiposdte extends Model
{
	protected $table = 'cv_tiposdte';
	public $timestamps = false;

	protected $fillable = [
		'nombre',
		'codigo',
		'descripcion'
	];

	public function cv_facturas()
	{
		return $this->hasMany(CvFactura::class, 'id_tipo');
	}
}
