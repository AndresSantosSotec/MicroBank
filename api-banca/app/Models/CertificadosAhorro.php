<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CertificadosAhorro
 * 
 * @property int $id_crt
 * @property string $ccodcrt
 * @property string $ccodcli
 * @property string $codaho
 * @property float $montoapr
 * @property Carbon $fec_ven
 * @property string $liquidado
 * @property float|null $intcal
 * @property Carbon $fec_apertura
 * @property string|null $short_name
 *
 * @package App\Models
 */
class CertificadosAhorro extends Model
{
	protected $table = 'certificadosAhorros';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_crt' => 'int',
		'montoapr' => 'float',
		'fec_ven' => 'datetime',
		'intcal' => 'float',
		'fec_apertura' => 'datetime'
	];

	protected $fillable = [
		'id_crt',
		'ccodcrt',
		'ccodcli',
		'codaho',
		'montoapr',
		'fec_ven',
		'liquidado',
		'intcal',
		'fec_apertura',
		'short_name'
	];
}
