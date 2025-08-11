<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TbPai
 * 
 * @property int $id_pais_region
 * @property string|null $Pais
 * @property string|null $Abreviatura
 *
 * @package App\Models
 */
class TbPai extends Model
{
	protected $table = 'tb_pais';
	protected $primaryKey = 'id_pais_region';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_pais_region' => 'int'
	];

	protected $fillable = [
		'Pais',
		'Abreviatura'
	];
}
