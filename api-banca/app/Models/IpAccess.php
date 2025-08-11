<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class IpAccess
 * 
 * @property int $id
 * @property string $ip
 * @property string|null $comentario
 *
 * @package App\Models
 */
class IpAccess extends Model
{
	protected $table = 'ip_access';
	public $timestamps = false;

	protected $fillable = [
		'ip',
		'comentario'
	];
}
