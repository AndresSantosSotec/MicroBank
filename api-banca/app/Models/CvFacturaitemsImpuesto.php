<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CvFacturaitemsImpuesto
 * 
 * @property int $id
 * @property int $id_impuestos_unidadgravable
 * @property float|null $monto_gravable
 * @property float|null $monto_impuesto
 * @property int|null $id_factura_items
 * 
 * @property CvFacturaItem|null $cv_factura_item
 * @property CvImpuestosunidadgravable $cv_impuestosunidadgravable
 *
 * @package App\Models
 */
class CvFacturaitemsImpuesto extends Model
{
	protected $table = 'cv_facturaitems_impuestos';
	public $timestamps = false;

	protected $casts = [
		'id_impuestos_unidadgravable' => 'int',
		'monto_gravable' => 'float',
		'monto_impuesto' => 'float',
		'id_factura_items' => 'int'
	];

	protected $fillable = [
		'id_impuestos_unidadgravable',
		'monto_gravable',
		'monto_impuesto',
		'id_factura_items'
	];

	public function cv_factura_item()
	{
		return $this->belongsTo(CvFacturaItem::class, 'id_factura_items');
	}

	public function cv_impuestosunidadgravable()
	{
		return $this->belongsTo(CvImpuestosunidadgravable::class, 'id_impuestos_unidadgravable');
	}
}
