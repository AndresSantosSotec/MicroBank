<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TbPermisosModulo
 * 
 * @property int $id
 * @property int|null $id_cooperativa
 * @property int|null $id_modulo
 * @property int|null $estado
 * @property string|null $comentario
 * 
 * @property InfoCoperativa|null $info_coperativa
 * @property TbModulo|null $tb_modulo
 *
 * @package App\Models
 */
class TbPermisosModulo extends Model
{
	protected $table = 'tb_permisos_modulos';
	public $timestamps = false;

	protected $casts = [
		'id_cooperativa' => 'int',
		'id_modulo' => 'int',
		'estado' => 'int'
	];

	protected $fillable = [
		'id_cooperativa',
		'id_modulo',
		'estado',
		'comentario'
	];

	public function info_coperativa()
	{
		return $this->belongsTo(InfoCoperativa::class, 'id_cooperativa');
	}

	public function tb_modulo()
	{
		return $this->belongsTo(TbModulo::class, 'id_modulo');
	}
}
