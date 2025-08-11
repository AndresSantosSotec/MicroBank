<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TbFuentesfondo
 * 
 * @property int $id_FuentesNegocios
 * @property string $FuentesNegocios
 *
 * @package App\Models
 */
class TbFuentesfondo extends Model
{
	protected $table = 'tb_fuentesfondos';
	protected $primaryKey = 'id_FuentesNegocios';
	public $timestamps = false;

	protected $fillable = [
		'FuentesNegocios'
	];
}
