<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TbEtnium
 * 
 * @property int $id
 * @property string|null $nombre
 *
 * @package App\Models
 */
class TbEtnium extends Model
{
	protected $table = 'tb_etnia';
	public $timestamps = false;

	protected $fillable = [
		'nombre'
	];
}
