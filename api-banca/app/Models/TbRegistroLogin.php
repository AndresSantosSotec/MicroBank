<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TbRegistroLogin
 * 
 * @property int $id
 * @property int|null $id_tb_usuario
 * @property Carbon|null $fecha_inicio
 * @property Carbon|null $fecha_fin
 * @property string|null $ip_direccion
 * @property string|null $hostname
 * @property string|null $user_agent
 * @property string|null $token
 * @property int|null $status
 * @property string|null $info_adicional
 *
 * @package App\Models
 */
class TbRegistroLogin extends Model
{
	protected $table = 'tb_registro_login';
	public $timestamps = false;

	protected $casts = [
		'id_tb_usuario' => 'int',
		'fecha_inicio' => 'datetime',
		'fecha_fin' => 'datetime',
		'status' => 'int'
	];

	protected $hidden = [
		'token'
	];

	protected $fillable = [
		'id_tb_usuario',
		'fecha_inicio',
		'fecha_fin',
		'ip_direccion',
		'hostname',
		'user_agent',
		'token',
		'status',
		'info_adicional'
	];
}
