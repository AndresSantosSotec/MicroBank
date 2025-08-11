<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TipProd
 * 
 * @property int $IdTipProd
 * @property string $TipServic
 * @property string $Abr
 * 
 * @property Collection|TbTprdct[] $tb_tprdcts
 *
 * @package App\Models
 */
class TipProd extends Model
{
	protected $table = 'TipProd';
	protected $primaryKey = 'IdTipProd';
	public $timestamps = false;

	protected $fillable = [
		'TipServic',
		'Abr'
	];

	public function tb_tprdcts()
	{
		return $this->hasMany(TbTprdct::class, 'IdTipProd1');
	}
}
