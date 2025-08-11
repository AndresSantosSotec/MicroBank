<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TbRechazocredito
 * 
 * @property string $id
 * @property string|null $descripcion
 *
 * @package App\Models
 */
class TbRechazocredito extends Model
{
	protected $table = 'tb_rechazocreditos';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'descripcion'
	];
}
