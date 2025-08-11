<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class InfoCoperativa
 * 
 * @property int $id_cop
 * @property string $cod_coop
 * @property string $nomb_comple
 * @property string $nomb_cor
 * @property string $muni_lug
 * @property string $emai
 * @property string $tel_1
 * @property string $tel_2
 * @property string $nit
 * @property string $log_img
 * @property string $direccion
 * @property string|null $folder
 * @property int|null $aplica_cierre
 * @property int $estado_pag
 * @property Carbon|null $fecha_pago
 * 
 * @property Collection|TbInfoinstitucionesBuro[] $tb_infoinstituciones_buros
 * @property Collection|TbPermisosModulo[] $tb_permisos_modulos
 *
 * @package App\Models
 */
class InfoCoperativa extends Model
{
	protected $table = 'info_coperativa';
	protected $primaryKey = 'id_cop';
	public $timestamps = false;

	protected $casts = [
		'aplica_cierre' => 'int',
		'estado_pag' => 'int',
		'fecha_pago' => 'datetime'
	];

	protected $fillable = [
		'cod_coop',
		'nomb_comple',
		'nomb_cor',
		'muni_lug',
		'emai',
		'tel_1',
		'tel_2',
		'nit',
		'log_img',
		'direccion',
		'folder',
		'aplica_cierre',
		'estado_pag',
		'fecha_pago'
	];

	public function tb_infoinstituciones_buros()
	{
		return $this->hasMany(TbInfoinstitucionesBuro::class, 'id_institucion');
	}

	public function tb_permisos_modulos()
	{
		return $this->hasMany(TbPermisosModulo::class, 'id_cooperativa');
	}
}
