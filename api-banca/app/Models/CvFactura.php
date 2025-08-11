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
 * Class CvFactura
 * 
 * @property int $id
 * @property int|null $id_moneda
 * @property int|null $id_tipo
 * @property int|null $id_emisor
 * @property int|null $id_receptor
 * @property Carbon|null $fechahora_emision
 * @property int|null $id_certificador
 * @property string|null $no_autorizacion
 * @property string|null $serie
 * @property string|null $codigo_autorizacion
 * @property Carbon|null $fechahora_certificacion
 * @property int|null $tipo
 * @property int|null $estado
 * @property Carbon|null $created_at
 * @property int|null $created_by
 * @property Carbon|null $updated_at
 * @property int|null $updated_by
 * @property string|null $deleted_at
 * @property int|null $deleted_by
 * @property int|null $origen_factura
 * 
 * @property CvCertificador|null $cv_certificador
 * @property CvEmisor|null $cv_emisor
 * @property CvReceptor|null $cv_receptor
 * @property CvTiposdte|null $cv_tiposdte
 * @property Collection|CvFacturaFrase[] $cv_factura_frases
 * @property Collection|CvFacturaItem[] $cv_factura_items
 *
 * @package App\Models
 */
class CvFactura extends Model
{
	use SoftDeletes;
	protected $table = 'cv_facturas';

	protected $casts = [
		'id_moneda' => 'int',
		'id_tipo' => 'int',
		'id_emisor' => 'int',
		'id_receptor' => 'int',
		'fechahora_emision' => 'datetime',
		'id_certificador' => 'int',
		'fechahora_certificacion' => 'datetime',
		'tipo' => 'int',
		'estado' => 'int',
		'created_by' => 'int',
		'updated_by' => 'int',
		'deleted_by' => 'int',
		'origen_factura' => 'int'
	];

	protected $fillable = [
		'id_moneda',
		'id_tipo',
		'id_emisor',
		'id_receptor',
		'fechahora_emision',
		'id_certificador',
		'no_autorizacion',
		'serie',
		'codigo_autorizacion',
		'fechahora_certificacion',
		'tipo',
		'estado',
		'created_by',
		'updated_by',
		'deleted_by',
		'origen_factura'
	];

	public function cv_certificador()
	{
		return $this->belongsTo(CvCertificador::class, 'id_certificador');
	}

	public function cv_emisor()
	{
		return $this->belongsTo(CvEmisor::class, 'id_emisor');
	}

	public function cv_receptor()
	{
		return $this->belongsTo(CvReceptor::class, 'id_receptor');
	}

	public function cv_tiposdte()
	{
		return $this->belongsTo(CvTiposdte::class, 'id_tipo');
	}

	public function cv_factura_frases()
	{
		return $this->hasMany(CvFacturaFrase::class, 'id_factura');
	}

	public function cv_factura_items()
	{
		return $this->hasMany(CvFacturaItem::class, 'id_factura');
	}
}
