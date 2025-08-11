<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TbSectordestinocredito
 * 
 * @property int $id_SectorDestinoCredito
 * @property string $SectorDestinoCredito
 *
 * @package App\Models
 */
class TbSectordestinocredito extends Model
{
	protected $table = 'tb_sectordestinocredito';
	protected $primaryKey = 'id_SectorDestinoCredito';
	public $timestamps = false;

	protected $fillable = [
		'SectorDestinoCredito'
	];
}
