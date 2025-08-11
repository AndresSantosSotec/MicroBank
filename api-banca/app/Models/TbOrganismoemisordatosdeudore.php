<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TbOrganismoemisordatosdeudore
 * 
 * @property string $id_OrganismoEmisorDatosDeudores
 * @property string $OrganismoEmisorDatosDeudores
 *
 * @package App\Models
 */
class TbOrganismoemisordatosdeudore extends Model
{
	protected $table = 'tb_organismoemisordatosdeudores';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'id_OrganismoEmisorDatosDeudores',
		'OrganismoEmisorDatosDeudores'
	];
}
