<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TbAplicacionesdocumentacion
 * 
 * @property int $id_AplicacionesDocumentacion
 * @property string $AplicacionesDocumentacion
 *
 * @package App\Models
 */
class TbAplicacionesdocumentacion extends Model
{
	protected $table = 'tb_aplicacionesdocumentacion';
	protected $primaryKey = 'id_AplicacionesDocumentacion';
	public $timestamps = false;

	protected $fillable = [
		'AplicacionesDocumentacion'
	];
}
