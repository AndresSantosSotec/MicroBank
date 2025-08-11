<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CtbDescriptInterese
 * 
 * @property int $id
 * @property string $nombre
 * @property string $descripcion
 *
 * @package App\Models
 */
class CtbDescriptInterese extends Model
{
	protected $table = 'ctb_descript_intereses';
	public $timestamps = false;

	protected $fillable = [
		'nombre',
		'descripcion'
	];
}
