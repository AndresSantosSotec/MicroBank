<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AprcrtBitacora
 * 
 * @property int $id
 * @property string $ccodcrt
 * @property string $ccodcli
 * @property string $ccodaport
 * @property float $montoapr
 * @property string $estado
 * @property Carbon $fec_crt
 * @property Carbon $fec_mod
 * @property string $codusu
 *
 * @package App\Models
 */
class AprcrtBitacora extends Model
{
	protected $table = 'aprcrt_bitacora';
	public $timestamps = false;

	protected $casts = [
		'montoapr' => 'float',
		'fec_crt' => 'datetime',
		'fec_mod' => 'datetime'
	];

	protected $fillable = [
		'ccodcrt',
		'ccodcli',
		'ccodaport',
		'montoapr',
		'estado',
		'fec_crt',
		'fec_mod',
		'codusu'
	];
}
