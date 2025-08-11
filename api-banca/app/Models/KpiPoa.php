<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class KpiPoa
 * 
 * @property int $id
 * @property int|null $id_poa
 * @property Carbon|null $year
 * @property int|null $mes
 * @property int|null $id_ejecutivo
 * @property float|null $cartera_creditos
 * @property int|null $clientes
 * @property float|null $cancel
 * @property int|null $grupos
 * @property float|null $colocaciones
 * 
 * @property KpiPoaHeader|null $kpi_poa_header
 *
 * @package App\Models
 */
class KpiPoa extends Model
{
	protected $table = 'kpi_poa';
	public $timestamps = false;

	protected $casts = [
		'id_poa' => 'int',
		'year' => 'datetime',
		'mes' => 'int',
		'id_ejecutivo' => 'int',
		'cartera_creditos' => 'float',
		'clientes' => 'int',
		'cancel' => 'float',
		'grupos' => 'int',
		'colocaciones' => 'float'
	];

	protected $fillable = [
		'id_poa',
		'year',
		'mes',
		'id_ejecutivo',
		'cartera_creditos',
		'clientes',
		'cancel',
		'grupos',
		'colocaciones'
	];

	public function kpi_poa_header()
	{
		return $this->belongsTo(KpiPoaHeader::class, 'id_poa');
	}
}
