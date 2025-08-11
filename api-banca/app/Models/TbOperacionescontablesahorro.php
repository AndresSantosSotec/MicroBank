<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TbOperacionescontablesahorro
 * 
 * @property int $id_OperacionesContablesAhorros
 * @property string $OperacionesContablesAhorros
 *
 * @package App\Models
 */
class TbOperacionescontablesahorro extends Model
{
	protected $table = 'tb_operacionescontablesahorros';
	protected $primaryKey = 'id_OperacionesContablesAhorros';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_OperacionesContablesAhorros' => 'int'
	];

	protected $fillable = [
		'OperacionesContablesAhorros'
	];
}
