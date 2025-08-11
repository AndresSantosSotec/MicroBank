<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TbTiposdocumentosfuenteingreso
 * 
 * @property int $id_TiposDocumentosFuenteIngreso
 * @property string $TiposDocumentosFuenteIngreso
 *
 * @package App\Models
 */
class TbTiposdocumentosfuenteingreso extends Model
{
	protected $table = 'tb_tiposdocumentosfuenteingreso';
	protected $primaryKey = 'id_TiposDocumentosFuenteIngreso';
	public $timestamps = false;

	protected $fillable = [
		'TiposDocumentosFuenteIngreso'
	];
}
