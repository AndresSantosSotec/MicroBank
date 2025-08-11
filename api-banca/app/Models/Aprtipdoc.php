<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Aprtipdoc
 * 
 * @property int $id
 * @property string $codtip
 * @property string $descripcion
 * @property string $cdebe
 * @property string $chaber
 *
 * @package App\Models
 */
class Aprtipdoc extends Model
{
	protected $table = 'aprtipdoc';
	public $timestamps = false;

	protected $fillable = [
		'codtip',
		'descripcion',
		'cdebe',
		'chaber'
	];
}
