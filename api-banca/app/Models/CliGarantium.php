<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\TbCliente;

/**
 * Class CliGarantium
 *
 * @property int $idGarantia
 * @property string|null $idCliente
 * @property int|null $idTipoGa
 * @property int|null $idTipoDoc
 * @property string|null $archivo
 * @property string|null $descripcionGarantia
 * @property string|null $direccion
 * @property string|null $depa
 * @property string|null $muni
 * @property float|null $valorComercial
 * @property float|null $montoAvaluo
 * @property float|null $montoGravamen
 * @property Carbon|null $fechaCreacion
 * @property int|null $estado
 * @property int|null $created_by
 * @property int|null $updated_by
 * @property int|null $deleted_by
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 *
 * @property Collection|TbGarantiasCredito[] $tb_garantias_creditos
 *
 * @package App\Models
 */
class CliGarantium extends Model
{
    use SoftDeletes;
    protected $table = 'cli_garantia';
    protected $primaryKey = 'idGarantia';

    protected $connection = 'banana';

    public function cliente()
    {
        return $this->belongsTo(TbCliente::class, 'idCliente', 'idcod_cliente');
    }

    protected $casts = [
        'idTipoGa' => 'int',
        'idTipoDoc' => 'int',
        'valorComercial' => 'float',
        'montoAvaluo' => 'float',
        'montoGravamen' => 'float',
        'fechaCreacion' => 'datetime',
        'estado' => 'int',
        'created_by' => 'int',
        'updated_by' => 'int',
        'deleted_by' => 'int'
    ];

    protected $fillable = [
        'idCliente',
        'idTipoGa',
        'idTipoDoc',
        'archivo',
        'descripcionGarantia',
        'direccion',
        'depa',
        'muni',
        'valorComercial',
        'montoAvaluo',
        'montoGravamen',
        'fechaCreacion',
        'estado',
        'created_by',
        'updated_by',
        'deleted_by'
    ];

    public function tb_garantias_creditos()
    {
        return $this->hasMany(TbGarantiasCredito::class, 'id_garantia');
    }
}
