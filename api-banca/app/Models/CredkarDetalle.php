<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CredkarDetalle
 * 
 * @property int $id
 * @property int|null $id_credkar
 * @property int|null $id_concepto
 * @property float|null $monto
 * 
 * @property CREDKAR|null $c_r_e_d_k_a_r
 *
 * @package App\Models
 */
class CredkarDetalle extends Model
{
	protected $table = 'credkar_detalle';
	public $timestamps = false;

	protected $casts = [
		'id_credkar' => 'int',
		'id_concepto' => 'int',
		'monto' => 'float'
	];

	protected $fillable = [
		'id_credkar',
		'id_concepto',
		'monto'
	];

	public function c_r_e_d_k_a_r()
	{
		return $this->belongsTo(CREDKAR::class, 'id_credkar');
	}
}
