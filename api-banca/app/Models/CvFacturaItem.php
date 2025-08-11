<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CvFacturaItem
 * 
 * @property int $id
 * @property int|null $numerolinea
 * @property string|null $tipo
 * @property float|null $cantidad
 * @property string|null $descripcion
 * @property float|null $precio_unitario
 * @property float|null $precio_parcial
 * @property float|null $descuento
 * @property float|null $otros_descuentos
 * @property float|null $total
 * @property float|null $impuesto
 * @property int|null $id_factura
 * 
 * @property CvFactura|null $cv_factura
 * @property Collection|CvFacturaitemsImpuesto[] $cv_facturaitems_impuestos
 *
 * @package App\Models
 */
class CvFacturaItem extends Model
{
	protected $table = 'cv_factura_items';
	public $timestamps = false;

	protected $casts = [
		'numerolinea' => 'int',
		'cantidad' => 'float',
		'precio_unitario' => 'float',
		'precio_parcial' => 'float',
		'descuento' => 'float',
		'otros_descuentos' => 'float',
		'total' => 'float',
		'impuesto' => 'float',
		'id_factura' => 'int'
	];

	protected $fillable = [
		'numerolinea',
		'tipo',
		'cantidad',
		'descripcion',
		'precio_unitario',
		'precio_parcial',
		'descuento',
		'otros_descuentos',
		'total',
		'impuesto',
		'id_factura'
	];

	public function cv_factura()
	{
		return $this->belongsTo(CvFactura::class, 'id_factura');
	}

	public function cv_facturaitems_impuestos()
	{
		return $this->hasMany(CvFacturaitemsImpuesto::class, 'id_factura_items');
	}
}
