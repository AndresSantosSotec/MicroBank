<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TbModuloss
 * 
 * @property int $id_modulo
 * @property string $Descrip
 * @property string $Modulo
 *
 * @package App\Models
 */
class TbModuloss extends Model
{
	protected $table = 'Tb_moduloss';
	protected $primaryKey = 'id_modulo';
	public $timestamps = false;

	protected $fillable = [
		'Descrip',
		'Modulo'
	];
}
