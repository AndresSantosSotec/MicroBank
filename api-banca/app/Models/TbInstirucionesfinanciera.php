<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TbInstirucionesfinanciera
 * 
 * @property int $id_InstitucionesFinancieras
 * @property string $InstitucionesFinancieras
 *
 * @package App\Models
 */
class TbInstirucionesfinanciera extends Model
{
	protected $table = 'tb_instirucionesfinancieras';
	protected $primaryKey = 'id_InstitucionesFinancieras';
	public $timestamps = false;

	protected $fillable = [
		'InstitucionesFinancieras'
	];
}
