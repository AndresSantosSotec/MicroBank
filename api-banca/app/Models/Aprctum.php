<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Aprctum
 *
 * @property int $id_cuenta
 * @property string $ccodaport
 * @property string|null $ccodcli
 * @property string|null $ccodtip
 * @property string|null $num_nit
 * @property int|null $nlibreta
 * @property string|null $estado
 * @property Carbon|null $fecha_apertura
 * @property Carbon|null $fecha_cancel
 * @property Carbon|null $fecha_ult
 * @property Carbon|null $fecha_mod
 * @property string $codigo_usu
 * @property int $correlativo
 * @property int $numlinea
 * @property float $tasa
 * @property string|null $ctainteres
 * @property bool|null $ret
 *
 * @package App\Models
 */
class Aprctum extends Model
{
	protected $table = 'aprcta';
	protected $primaryKey = 'id_cuenta';
	public $timestamps = false;
    protected $connection = 'banana';

	protected $casts = [
		'nlibreta' => 'int',
		'fecha_apertura' => 'datetime',
		'fecha_cancel' => 'datetime',
		'fecha_ult' => 'datetime',
		'fecha_mod' => 'datetime',
		'correlativo' => 'int',
		'numlinea' => 'int',
		'tasa' => 'float',
		'ret' => 'bool'
	];

        protected $fillable = [
                'ccodaport',
                'ccodcli',
                'ccodtip',
                'num_nit',
                'nlibreta',
                'estado',
                'fecha_apertura',
                'fecha_cancel',
                'fecha_ult',
                'fecha_mod',
                'codigo_usu',
                'correlativo',
                'numlinea',
                'tasa',
                'ctainteres',
                'ret'
        ];

        protected function sanitizeDate($value)
        {
                if ($value === '0000-00-00' || $value === '0000-00-00 00:00:00' || $value === null) {
                        return null;
                }

                return Carbon::parse($value);
        }

        public function getFechaAperturaAttribute($value)
        {
                return $this->sanitizeDate($value);
        }

        public function getFechaCancelAttribute($value)
        {
                return $this->sanitizeDate($value);
        }

        public function getFechaUltAttribute($value)
        {
                return $this->sanitizeDate($value);
        }
}
