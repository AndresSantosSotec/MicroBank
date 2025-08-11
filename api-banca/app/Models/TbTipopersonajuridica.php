<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TbTipopersonajuridica
 * 
 * @property string $id_TipoPersonaJuridica
 * @property string $TipoPersonaJuridica
 *
 * @package App\Models
 */
class TbTipopersonajuridica extends Model
{
	protected $table = 'tb_tipopersonajuridica';
	protected $primaryKey = 'id_TipoPersonaJuridica';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'TipoPersonaJuridica'
	];
}
