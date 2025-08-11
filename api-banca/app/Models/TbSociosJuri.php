<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TbSociosJuri
 * 
 * @property int $id_socio
 * @property string $name_socio
 * @property string $puesto_socio
 * @property string $id_clnt_ntral
 *
 * @package App\Models
 */
class TbSociosJuri extends Model
{
	protected $table = 'tb_socios_juri';
	protected $primaryKey = 'id_socio';
	public $timestamps = false;

	protected $fillable = [
		'name_socio',
		'puesto_socio',
		'id_clnt_ntral'
	];
}
