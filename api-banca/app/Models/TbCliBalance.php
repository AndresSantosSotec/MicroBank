<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class TbCliBalance
 * 
 * @property int $id
 * @property string|null $ccodcli
 * @property Carbon|null $fechaeval
 * @property Carbon|null $fechabalance
 * @property float|null $ventas
 * @property float|null $cuenta_por_cobrar
 * @property float|null $mercaderia
 * @property float|null $negocio
 * @property float|null $pago_creditos
 * @property float|null $disponible
 * @property float|null $cuenta_por_cobrar2
 * @property float|null $inventario
 * @property float|null $activo_fijo
 * @property float|null $proveedores
 * @property float|null $otros_prestamos
 * @property float|null $prest_instituciones
 * @property float|null $patrimonio
 * @property int|null $estado
 * @property string|null $deleted_at
 * @property int|null $deleted_by
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property int|null $created_by
 * @property int|null $updated_by
 *
 * @package App\Models
 */
class TbCliBalance extends Model
{
	use SoftDeletes;
	protected $table = 'tb_cli_balance';

	protected $casts = [
		'fechaeval' => 'datetime',
		'fechabalance' => 'datetime',
		'ventas' => 'float',
		'cuenta_por_cobrar' => 'float',
		'mercaderia' => 'float',
		'negocio' => 'float',
		'pago_creditos' => 'float',
		'disponible' => 'float',
		'cuenta_por_cobrar2' => 'float',
		'inventario' => 'float',
		'activo_fijo' => 'float',
		'proveedores' => 'float',
		'otros_prestamos' => 'float',
		'prest_instituciones' => 'float',
		'patrimonio' => 'float',
		'estado' => 'int',
		'deleted_by' => 'int',
		'created_by' => 'int',
		'updated_by' => 'int'
	];

	protected $fillable = [
		'ccodcli',
		'fechaeval',
		'fechabalance',
		'ventas',
		'cuenta_por_cobrar',
		'mercaderia',
		'negocio',
		'pago_creditos',
		'disponible',
		'cuenta_por_cobrar2',
		'inventario',
		'activo_fijo',
		'proveedores',
		'otros_prestamos',
		'prest_instituciones',
		'patrimonio',
		'estado',
		'deleted_by',
		'created_by',
		'updated_by'
	];
}
