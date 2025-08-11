<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TbTprdct
 * 
 * @property int $id_TipoServicio
 * @property string $ide_prod
 * @property string $tipo_producto
 * @property int $IdTipProd1
 * 
 * @property TipProd $tip_prod
 *
 * @package App\Models
 */
class TbTprdct extends Model
{
	protected $table = 'tb_tprdcts';
	protected $primaryKey = 'id_TipoServicio';
	public $timestamps = false;

	protected $casts = [
		'IdTipProd1' => 'int'
	];

	protected $fillable = [
		'ide_prod',
		'tipo_producto',
		'IdTipProd1'
	];

	public function tip_prod()
	{
		return $this->belongsTo(TipProd::class, 'IdTipProd1');
	}
}
