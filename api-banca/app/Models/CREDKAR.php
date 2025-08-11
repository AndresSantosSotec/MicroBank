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
 * Class CREDKAR
 * 
 * @property int $CODKAR
 * @property string $CCODCTA
 * @property Carbon $DFECPRO
 * @property Carbon $DFECSIS
 * @property int $CNROCUO
 * @property float $NMONTO
 * @property string $CNUMING
 * @property string $CCONCEP
 * @property float $KP
 * @property float $INTERES
 * @property float $MORA
 * @property float $AHOPRG
 * @property float $OTR
 * @property string $CCODINS
 * @property string $CCODOFI
 * @property string $CCODUSU
 * @property string $CTIPPAG
 * @property string $CMONEDA
 * @property string|null $FormPago
 * @property Carbon|null $DFECBANCO
 * @property string|null $boletabanco
 * @property string|null $CBANCO
 * @property string|null $CCODBANCO
 * @property string $CESTADO
 * @property Carbon $DFECMOD
 * @property string|null $CTERMID
 * @property int|null $MANCOMUNAD
 * @property int|null $updated_by
 * @property int|null $deleted_by
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Collection|CrePpgLog[] $cre_ppg_logs
 * @property Collection|CredkarDetalle[] $credkar_detalles
 *
 * @package App\Models
 */
class CREDKAR extends Model
{
	use SoftDeletes;
	protected $table = 'CREDKAR';
	protected $primaryKey = 'CODKAR';
	public $timestamps = false;

	protected $casts = [
		'DFECPRO' => 'datetime',
		'DFECSIS' => 'datetime',
		'CNROCUO' => 'int',
		'NMONTO' => 'float',
		'KP' => 'float',
		'INTERES' => 'float',
		'MORA' => 'float',
		'AHOPRG' => 'float',
		'OTR' => 'float',
		'DFECBANCO' => 'datetime',
		'DFECMOD' => 'datetime',
		'MANCOMUNAD' => 'int',
		'updated_by' => 'int',
		'deleted_by' => 'int'
	];

	protected $fillable = [
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
		'DFECBANCO',
		'boletabanco',
		'CBANCO',
		'CCODBANCO',
		'CESTADO',
		'DFECMOD',
		'CTERMID',
		'MANCOMUNAD',
		'updated_by',
		'deleted_by'
	];

	public function cre_ppg_logs()
	{
		return $this->hasMany(CrePpgLog::class, 'credkar_id');
	}

	public function credkar_detalles()
	{
		return $this->hasMany(CredkarDetalle::class, 'id_credkar');
	}
}
