<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TbTipocliente
 * 
 * @property int $id_TipoCliente
 * @property string $TipoCliente
 *
 * @package App\Models
 */
class TbTipocliente extends Model
{
	protected $table = 'tb_tipocliente';
	protected $primaryKey = 'id_TipoCliente';
	public $timestamps = false;

	protected $fillable = [
		'TipoCliente'
	];
}
