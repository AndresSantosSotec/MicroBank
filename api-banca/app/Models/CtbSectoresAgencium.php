<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CtbSectoresAgencium
 * 
 * @property int $id
 * @property int $id_agencia
 * @property int $id_sector
 * 
 * @property CtbSectore $ctb_sectore
 * @property TbAgencium $tb_agencium
 *
 * @package App\Models
 */
class CtbSectoresAgencium extends Model
{
	protected $table = 'ctb_sectores_agencia';
	public $timestamps = false;

	protected $casts = [
		'id_agencia' => 'int',
		'id_sector' => 'int'
	];

	protected $fillable = [
		'id_agencia',
		'id_sector'
	];

	public function ctb_sectore()
	{
		return $this->belongsTo(CtbSectore::class, 'id_sector');
	}

	public function tb_agencium()
	{
		return $this->belongsTo(TbAgencium::class, 'id_agencia');
	}
}
