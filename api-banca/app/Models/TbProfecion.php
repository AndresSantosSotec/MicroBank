<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TbProfecion
 * 
 * @property int $id_Profecion
 * @property string|null $Profecion
 *
 * @package App\Models
 */
class TbProfecion extends Model
{
	protected $table = 'tb_Profecion';
	protected $primaryKey = 'id_Profecion';
	public $timestamps = false;

	protected $fillable = [
		'Profecion'
	];
}
