<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TbPeriodopago
 * 
 * @property string $id_PeriodoPago
 * @property string $PeriodoPago
 *
 * @package App\Models
 */
class TbPeriodopago extends Model
{
	protected $table = 'tb_periodopago';
	protected $primaryKey = 'id_PeriodoPago';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'PeriodoPago'
	];
}
