<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TbTiposdocumentosR
 * 
 * @property int $idDoc
 * @property string|null $NombreDoc
 *
 * @package App\Models
 */
class TbTiposdocumentosR extends Model
{
	protected $table = 'tb_tiposdocumentosR';
	protected $primaryKey = 'idDoc';
	public $timestamps = false;

	protected $fillable = [
		'NombreDoc'
	];
}
