<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TbSectoreseconomico
 * 
 * @property string $id_SectoresEconomicos
 * @property string $SectoresEconomicos
 * 
 * @property Collection|TbActiEcono[] $tb_acti_econos
 *
 * @package App\Models
 */
class TbSectoreseconomico extends Model
{
	protected $table = 'tb_sectoreseconomicos';
	protected $primaryKey = 'id_SectoresEconomicos';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'SectoresEconomicos'
	];

	public function tb_acti_econos()
	{
		return $this->hasMany(TbActiEcono::class, 'Id_SctrEcono');
	}
}
