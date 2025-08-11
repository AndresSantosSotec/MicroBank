<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TbGenero
 * 
 * @property int $id
 * @property string|null $siglas
 * @property string|null $genero
 *
 * @package App\Models
 */
class TbGenero extends Model
{
	protected $table = 'tb_genero';
	public $timestamps = false;

	protected $fillable = [
		'siglas',
		'genero'
	];
}
