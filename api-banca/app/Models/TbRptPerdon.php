<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TbRptPerdon
 * 
 * @property int $id
 * @property int|null $tipo
 * @property string|null $ccodcta
 * @property int|null $num_pago
 * @property float|null $efec_real
 * @property float|null $efec_perdonado
 * @property int|null $created_by
 * @property Carbon|null $created_at
 *
 * @package App\Models
 */
class TbRptPerdon extends Model
{
	protected $table = 'tb_rpt_perdon';
	public $timestamps = false;

	protected $casts = [
		'tipo' => 'int',
		'num_pago' => 'int',
		'efec_real' => 'float',
		'efec_perdonado' => 'float',
		'created_by' => 'int'
	];

	protected $fillable = [
		'tipo',
		'ccodcta',
		'num_pago',
		'efec_real',
		'efec_perdonado',
		'created_by'
	];
}
