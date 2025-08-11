<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class TbUsuario
 * 
 * @property int $id_usu
 * @property string $nombre
 * @property string $apellido
 * @property string $dpi
 * @property string $usu
 * @property string $pass
 * @property int $estado
 * @property string $puesto
 * @property int $id_agencia
 * @property int $sesion_act
 * @property Carbon|null $exp_date
 * @property string $Email
 * @property string|null $profile
 * @property int|null $id_rol
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property string|null $deleted_by
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Collection|CtbBanco[] $ctb_bancos
 * @property Collection|CtbDiario[] $ctb_diarios
 * @property Collection|CtbFuenteFondo[] $ctb_fuente_fondos
 * @property Collection|KpiPoaHeader[] $kpi_poa_headers
 * @property Collection|TbConfiguracionesDocumento[] $tb_configuraciones_documentos
 * @property Collection|TbEjecutivo[] $tb_ejecutivos
 * @property Collection|TbMensajesUsuario[] $tb_mensajes_usuarios
 * @property Collection|TbPermiso[] $tb_permisos
 * @property Collection|TbPermisos2[] $tb_permisos2s
 *
 * @package App\Models
 */
class TbUsuario extends Model
{
	use SoftDeletes;
	protected $table = 'tb_usuario';
	protected $primaryKey = 'id_usu';

	protected $casts = [
		'estado' => 'int',
		'id_agencia' => 'int',
		'sesion_act' => 'int',
		'exp_date' => 'datetime',
		'id_rol' => 'int'
	];

	protected $fillable = [
		'nombre',
		'apellido',
		'dpi',
		'usu',
		'pass',
		'estado',
		'puesto',
		'id_agencia',
		'sesion_act',
		'exp_date',
		'Email',
		'profile',
		'id_rol',
		'created_by',
		'updated_by',
		'deleted_by'
	];

	public function ctb_bancos()
	{
		return $this->hasMany(CtbBanco::class, 'codusu');
	}

	public function ctb_diarios()
	{
		return $this->hasMany(CtbDiario::class, 'id_tb_usu');
	}

	public function ctb_fuente_fondos()
	{
		return $this->hasMany(CtbFuenteFondo::class, 'id_usuario');
	}

	public function kpi_poa_headers()
	{
		return $this->hasMany(KpiPoaHeader::class, 'id_ejecutivo');
	}

	public function tb_configuraciones_documentos()
	{
		return $this->hasMany(TbConfiguracionesDocumento::class, 'usuario_id');
	}

	public function tb_ejecutivos()
	{
		return $this->hasMany(TbEjecutivo::class, 'id_usuario');
	}

	public function tb_mensajes_usuarios()
	{
		return $this->hasMany(TbMensajesUsuario::class, 'id_usuario');
	}

	public function tb_permisos()
	{
		return $this->hasMany(TbPermiso::class, 'id_usuario');
	}

	public function tb_permisos2s()
	{
		return $this->hasMany(TbPermisos2::class, 'id_usuario');
	}
}
