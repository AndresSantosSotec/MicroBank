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
 * Class CreProducto
 * 
 * @property int $id
 * @property int $id_fondo
 * @property string $cod_producto
 * @property string $nombre
 * @property string $descripcion
 * @property float $monto_maximo
 * @property float $tasa_interes
 * @property int $dias_calculo
 * @property float $porcentaje_mora
 * @property int $dias_de_gracias
 * @property int $tipo_mora
 * @property int $tipo_calculo
 * @property int $id_cuenta_capital
 * @property int $id_cuenta_interes
 * @property int $id_cuenta_mora
 * @property int $id_cuenta_otros
 * @property int $estado
 * @property int|null $created_by
 * @property int|null $updated_by
 * @property int|null $deleted_by
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property int|null $configgracia
 * @property int|null $id_tipo_periodo
 * @property int|null $reestructuracion
 * @property int|null $diasCorridos
 * 
 * @property CtbNomenclatura $ctb_nomenclatura
 * @property CtbFuenteFondo $ctb_fuente_fondo
 * @property Collection|CreProductosGasto[] $cre_productos_gastos
 *
 * @package App\Models
 */
class CreProducto extends Model
{
	use SoftDeletes;
	protected $table = 'cre_productos';

	protected $casts = [
		'id_fondo' => 'int',
		'monto_maximo' => 'float',
		'tasa_interes' => 'float',
		'dias_calculo' => 'int',
		'porcentaje_mora' => 'float',
		'dias_de_gracias' => 'int',
		'tipo_mora' => 'int',
		'tipo_calculo' => 'int',
		'id_cuenta_capital' => 'int',
		'id_cuenta_interes' => 'int',
		'id_cuenta_mora' => 'int',
		'id_cuenta_otros' => 'int',
		'estado' => 'int',
		'created_by' => 'int',
		'updated_by' => 'int',
		'deleted_by' => 'int',
		'configgracia' => 'int',
		'id_tipo_periodo' => 'int',
		'reestructuracion' => 'int',
		'diasCorridos' => 'int'
	];

	protected $fillable = [
		'id_fondo',
		'cod_producto',
		'nombre',
		'descripcion',
		'monto_maximo',
		'tasa_interes',
		'dias_calculo',
		'porcentaje_mora',
		'dias_de_gracias',
		'tipo_mora',
		'tipo_calculo',
		'id_cuenta_capital',
		'id_cuenta_interes',
		'id_cuenta_mora',
		'id_cuenta_otros',
		'estado',
		'created_by',
		'updated_by',
		'deleted_by',
		'configgracia',
		'id_tipo_periodo',
		'reestructuracion',
		'diasCorridos'
	];

	public function ctb_nomenclatura()
	{
		return $this->belongsTo(CtbNomenclatura::class, 'id_cuenta_otros');
	}

	public function ctb_fuente_fondo()
	{
		return $this->belongsTo(CtbFuenteFondo::class, 'id_fondo');
	}

	public function cre_productos_gastos()
	{
		return $this->hasMany(CreProductosGasto::class, 'id_producto');
	}
}
