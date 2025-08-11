<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Aprcrt
 * 
 * @property int $id_crt
 * @property string $ccodcrt
 * @property string $ccodcli
 * @property string $ccodaport
 * @property float $montoapr
 * @property string|null $norecibo
 * @property string $estado
 * @property Carbon $fec_crt
 * @property Carbon $fec_mod
 * @property string $codusu
 *
 * @package App\Models
 */
class Aprcrt extends Model
{
	protected $table = 'aprcrt';
	protected $primaryKey = 'id_crt';
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
		'norecibo',
		'estado',
		'fec_crt',
		'fec_mod',
		'codusu'
	];
}
