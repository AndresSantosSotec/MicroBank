<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TbInfoDocumento
 * 
 * @property int $id
 * @property string $descripcion
 *
 * @package App\Models
 */
class TbInfoDocumento extends Model
{
	protected $table = 'tb_info_documentos';
	public $timestamps = false;

	protected $fillable = [
		'descripcion'
	];
}
