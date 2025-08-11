<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TbNegocio
 * 
 * @property int $id_Negocio
 * @property string $Negocio
 *
 * @package App\Models
 */
class TbNegocio extends Model
{
	protected $table = 'tb_negocio';
	protected $primaryKey = 'id_Negocio';
	public $timestamps = false;

	protected $fillable = [
		'Negocio'
	];
}
