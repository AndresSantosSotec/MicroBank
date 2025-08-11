<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class KpiPoaAux
 * 
 * @property int $id
 * @property Carbon|null $year
 * @property int|null $mes
 * @property int|null $id_ejecutivo
 * @property float|null $cartera_creditos
 * @property int|null $clientes
 * @property int|null $grupos
 * @property int|null $cancel
 * @property float|null $colocaciones
 *
 * @package App\Models
 */
class KpiPoaAux extends Model
{
	protected $table = 'kpi_poa_aux';
	public $timestamps = false;

	protected $casts = [
		'year' => 'datetime',
		'mes' => 'int',
		'id_ejecutivo' => 'int',
		'cartera_creditos' => 'float',
		'clientes' => 'int',
		'grupos' => 'int',
		'cancel' => 'int',
		'colocaciones' => 'float'
	];

	protected $fillable = [
		'year',
		'mes',
		'id_ejecutivo',
		'cartera_creditos',
		'clientes',
		'grupos',
		'cancel',
		'colocaciones'
	];
}
