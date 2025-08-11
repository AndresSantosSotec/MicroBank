<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TbTipocartera
 * 
 * @property int $id_TipoCartera
 * @property string $TipoCartera
 *
 * @package App\Models
 */
class TbTipocartera extends Model
{
	protected $table = 'tb_tipocartera';
	protected $primaryKey = 'id_TipoCartera';
	public $timestamps = false;

	protected $fillable = [
		'TipoCartera'
	];
}
