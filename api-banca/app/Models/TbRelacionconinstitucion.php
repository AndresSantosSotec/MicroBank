<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TbRelacionconinstitucion
 * 
 * @property int $id_RelacionConInstitucio
 * @property string $RelacionConInstitucion
 *
 * @package App\Models
 */
class TbRelacionconinstitucion extends Model
{
	protected $table = 'tb_relacionconinstitucion';
	protected $primaryKey = 'id_RelacionConInstitucio';
	public $timestamps = false;

	protected $fillable = [
		'RelacionConInstitucion'
	];
}
