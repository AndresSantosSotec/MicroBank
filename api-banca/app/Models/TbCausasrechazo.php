<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TbCausasrechazo
 * 
 * @property int $id_CausasRechazo
 * @property string $CausasRechazo
 *
 * @package App\Models
 */
class TbCausasrechazo extends Model
{
	protected $table = 'tb_causasrechazo';
	protected $primaryKey = 'id_CausasRechazo';
	public $timestamps = false;

	protected $fillable = [
		'CausasRechazo'
	];
}
