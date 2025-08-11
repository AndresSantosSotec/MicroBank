<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TbClasificacioncredito
 * 
 * @property int $id_ClasificacionCredito
 * @property string $ClasificacionCredito
 *
 * @package App\Models
 */
class TbClasificacioncredito extends Model
{
	protected $table = 'tb_clasificacioncredito';
	protected $primaryKey = 'id_ClasificacionCredito';
	public $timestamps = false;

	protected $fillable = [
		'ClasificacionCredito'
	];
}
