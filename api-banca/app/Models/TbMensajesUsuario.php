<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TbMensajesUsuario
 * 
 * @property int $id
 * @property int $id_usuario
 * @property int $id_mensaje
 * @property Carbon|null $view_at
 * 
 * @property TbMensajesSistema $tb_mensajes_sistema
 * @property TbUsuario $tb_usuario
 *
 * @package App\Models
 */
class TbMensajesUsuario extends Model
{
	protected $table = 'tb_mensajes_usuario';
	public $timestamps = false;

	protected $casts = [
		'id_usuario' => 'int',
		'id_mensaje' => 'int',
		'view_at' => 'datetime'
	];

	protected $fillable = [
		'id_usuario',
		'id_mensaje',
		'view_at'
	];

	public function tb_mensajes_sistema()
	{
		return $this->belongsTo(TbMensajesSistema::class, 'id_mensaje');
	}

	public function tb_usuario()
	{
		return $this->belongsTo(TbUsuario::class, 'id_usuario');
	}
}
