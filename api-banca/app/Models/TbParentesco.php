<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TbParentesco
 * 
 * @property int $id_parent
 * @property string|null $descripcion
 *
 * @package App\Models
 */
class TbParentesco extends Model
{
	protected $table = 'tb_parentesco';
	protected $primaryKey = 'id_parent';
	public $timestamps = false;

	protected $fillable = [
		'descripcion'
	];
}
