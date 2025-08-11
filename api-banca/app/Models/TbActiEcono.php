<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TbActiEcono
 * 
 * @property int $id_ActiEcono
 * @property string $Id_SctrEcono
 * @property string|null $Titulo
 * 
 * @property TbSectoreseconomico $tb_sectoreseconomico
 *
 * @package App\Models
 */
class TbActiEcono extends Model
{
	protected $table = 'tb_ActiEcono';
	protected $primaryKey = 'id_ActiEcono';
	public $timestamps = false;

	protected $fillable = [
		'Id_SctrEcono',
		'Titulo'
	];

	public function tb_sectoreseconomico()
	{
		return $this->belongsTo(TbSectoreseconomico::class, 'Id_SctrEcono');
	}
}
