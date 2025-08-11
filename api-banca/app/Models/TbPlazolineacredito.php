<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TbPlazolineacredito
 * 
 * @property int $id_PlazoLineaCredito
 * @property string $PlazoLineaCredito
 *
 * @package App\Models
 */
class TbPlazolineacredito extends Model
{
	protected $table = 'tb_plazolineacredito';
	protected $primaryKey = 'id_PlazoLineaCredito';
	public $timestamps = false;

	protected $fillable = [
		'PlazoLineaCredito'
	];
}
