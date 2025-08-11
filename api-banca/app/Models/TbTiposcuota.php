<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TbTiposcuota
 * 
 * @property string $id_TiposCuotas
 * @property string $TiposCuotas
 *
 * @package App\Models
 */
class TbTiposcuota extends Model
{
	protected $table = 'tb_tiposcuotas';
	protected $primaryKey = 'id_TiposCuotas';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'TiposCuotas'
	];
}
