<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CvFacturaFrase
 * 
 * @property int $id
 * @property int $id_escenario
 * @property int $id_factura
 * 
 * @property CvEscenario $cv_escenario
 * @property CvFactura $cv_factura
 *
 * @package App\Models
 */
class CvFacturaFrase extends Model
{
	protected $table = 'cv_factura_frases';
	public $timestamps = false;

	protected $casts = [
		'id_escenario' => 'int',
		'id_factura' => 'int'
	];

	protected $fillable = [
		'id_escenario',
		'id_factura'
	];

	public function cv_escenario()
	{
		return $this->belongsTo(CvEscenario::class, 'id_escenario');
	}

	public function cv_factura()
	{
		return $this->belongsTo(CvFactura::class, 'id_factura');
	}
}
