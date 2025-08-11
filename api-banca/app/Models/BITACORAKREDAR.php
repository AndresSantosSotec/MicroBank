<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class BITACORAKREDAR
 * 
 * @property int $CODKAR
 * @property string|null $CCODCTA
 * @property Carbon|null $DFECPRO
 * @property Carbon|null $DFECSIS
 * @property int|null $CNROCUO
 * @property float|null $NMONTO
 * @property string|null $CNUMING
 * @property string|null $CCONCEP
 * @property float|null $KP
 * @property float|null $INTERES
 * @property float|null $MORA
 * @property float|null $AHOPRG
 * @property float|null $OTR
 * @property string|null $CCODINS
 * @property string|null $CCODOFI
 * @property string|null $CCODUSU
 * @property string|null $CTIPPAG
 * @property string|null $CMONEDA
 * @property string|null $FormPago
 * @property string|null $CCODBANCO
 * @property string|null $CESTADO
 * @property Carbon $DFECMOD
 * @property string|null $CTERMID
 * @property int|null $MANCOMUNAD
 *
 * @package App\Models
 */
class BITACORAKREDAR extends Model
{
	protected $table = 'BITACORA_KREDAR';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'CODKAR' => 'int',
		'DFECPRO' => 'datetime',
		'DFECSIS' => 'datetime',
		'CNROCUO' => 'int',
		'NMONTO' => 'float',
		'KP' => 'float',
		'INTERES' => 'float',
		'MORA' => 'float',
		'AHOPRG' => 'float',
		'OTR' => 'float',
		'DFECMOD' => 'datetime',
		'MANCOMUNAD' => 'int'
	];

	protected $fillable = [
		'CODKAR',
		'CCODCTA',
		'DFECPRO',
		'DFECSIS',
		'CNROCUO',
		'NMONTO',
		'CNUMING',
		'CCONCEP',
		'KP',
		'INTERES',
		'MORA',
		'AHOPRG',
		'OTR',
		'CCODINS',
		'CCODOFI',
		'CCODUSU',
		'CTIPPAG',
		'CMONEDA',
		'FormPago',
		'CCODBANCO',
		'CESTADO',
		'DFECMOD',
		'CTERMID',
		'MANCOMUNAD'
	];
}
