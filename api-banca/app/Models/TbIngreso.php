<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TbIngreso
 * 
 * @property int $id_ingre_dependi
 * @property string $id_cliente
 * @property string $nombre_empresa
 * @property string|null $patente
 * @property string $no_registro
 * @property string $folio
 * @property string $libro
 * @property Carbon $fecha_patente
 * @property string $depa_negocio
 * @property string $muni_negocio
 * @property string $detalle_ingreso
 * @property string $direc_negocio
 * @property string|null $referencia
 * @property string|null $telefono_negocio
 * @property string $puesto_ocupa
 * @property int $empleados
 * @property Carbon $fecha_sys
 * @property Carbon $fecha_labor
 * @property float $sueldo_base
 * @property string|null $NIT_empresa
 * @property string $condi_negocio
 * @property int $actividad_economica
 * @property string $sector_Econo
 * @property string $fuente_ingreso
 * @property int $Tipo_ingreso
 * @property Carbon|null $created_at
 *
 * @package App\Models
 */
class TbIngreso extends Model
{
	protected $table = 'tb_ingresos';
	protected $primaryKey = 'id_ingre_dependi';
	public $timestamps = false;

	protected $casts = [
		'fecha_patente' => 'datetime',
		'empleados' => 'int',
		'fecha_sys' => 'datetime',
		'fecha_labor' => 'datetime',
		'sueldo_base' => 'float',
		'actividad_economica' => 'int',
		'Tipo_ingreso' => 'int'
	];

	protected $fillable = [
		'id_cliente',
		'nombre_empresa',
		'patente',
		'no_registro',
		'folio',
		'libro',
		'fecha_patente',
		'depa_negocio',
		'muni_negocio',
		'detalle_ingreso',
		'direc_negocio',
		'referencia',
		'telefono_negocio',
		'puesto_ocupa',
		'empleados',
		'fecha_sys',
		'fecha_labor',
		'sueldo_base',
		'NIT_empresa',
		'condi_negocio',
		'actividad_economica',
		'sector_Econo',
		'fuente_ingreso',
		'Tipo_ingreso'
	];
}
