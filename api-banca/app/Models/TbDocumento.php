<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TbDocumento
 * 
 * @property int $id
 * @property int $id_reporte
 * @property string $nombre
 * @property string|null $file
 *
 * @package App\Models
 */
class TbDocumento extends Model
{
	protected $table = 'tb_documentos';
	public $timestamps = false;

	protected $casts = [
		'id_reporte' => 'int'
	];

	protected $fillable = [
		'id_reporte',
		'nombre',
		'file'
	];
}
