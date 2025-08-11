<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Ahotipdoc
 * 
 * @property int $id
 * @property string $codtip
 * @property string $descripcion
 * @property string $cdebe
 * @property string $chaber
 *
 * @package App\Models
 */
class Ahotipdoc extends Model
{
	protected $table = 'ahotipdoc';
	public $timestamps = false;

	protected $fillable = [
		'codtip',
		'descripcion',
		'cdebe',
		'chaber'
	];
}
