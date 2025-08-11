<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TbTiposgarantium
 * 
 * @property int $id_TiposGarantia
 * @property string $TiposGarantia
 * @property string|null $cod_crediref
 *
 * @package App\Models
 */
class TbTiposgarantium extends Model
{
	protected $table = 'tb_tiposgarantia';
	protected $primaryKey = 'id_TiposGarantia';
	public $timestamps = false;

	protected $fillable = [
		'TiposGarantia',
		'cod_crediref'
	];
}
