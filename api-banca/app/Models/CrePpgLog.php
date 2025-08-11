<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CrePpgLog
 * 
 * @property int $id
 * @property int $no_cuota
 * @property string $ccodcta
 * @property int $credkar_id
 * @property float $morapag
 * @property bool|null $tipo_autorizacion
 * @property int|null $autorizado_por
 * 
 * @property CREDKAR $c_r_e_d_k_a_r
 *
 * @package App\Models
 */
class CrePpgLog extends Model
{
	protected $table = 'cre_ppg_log';
	public $timestamps = false;

	protected $casts = [
		'no_cuota' => 'int',
		'credkar_id' => 'int',
		'morapag' => 'float',
		'tipo_autorizacion' => 'bool',
		'autorizado_por' => 'int'
	];

	protected $fillable = [
		'no_cuota',
		'ccodcta',
		'credkar_id',
		'morapag',
		'tipo_autorizacion',
		'autorizado_por'
	];

	public function c_r_e_d_k_a_r()
	{
		return $this->belongsTo(CREDKAR::class, 'credkar_id');
	}
}
