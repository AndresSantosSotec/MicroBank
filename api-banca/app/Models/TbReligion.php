<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TbReligion
 * 
 * @property int $id
 * @property string|null $nombre
 *
 * @package App\Models
 */
class TbReligion extends Model
{
	protected $table = 'tb_religion';
	public $timestamps = false;

	protected $fillable = [
		'nombre'
	];
}
