<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TbMensajesSistema
 * 
 * @property int $id
 * @property string $codigo
 * @property string $commit
 * @property string $titulo
 * @property string $mensaje
 * @property string $format
 * @property Carbon|null $fecha_fin
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|TbMensajesUsuario[] $tb_mensajes_usuarios
 *
 * @package App\Models
 */
class TbMensajesSistema extends Model
{
	protected $table = 'tb_mensajes_sistema';

	protected $casts = [
		'fecha_fin' => 'datetime'
	];

	protected $fillable = [
		'codigo',
		'commit',
		'titulo',
		'mensaje',
		'format',
		'fecha_fin'
	];

	public function tb_mensajes_usuarios()
	{
		return $this->hasMany(TbMensajesUsuario::class, 'id_mensaje');
	}
}
