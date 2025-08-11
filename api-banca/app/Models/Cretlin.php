<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Cretlin
 * 
 * @property string $CNroLin
 * @property string $CCodLin
 * @property Carbon $DFecVig
 * @property string $CDesLin
 * @property float $NTasInt
 * @property string $CTipCal
 * @property float $NTasMor
 * @property float $Nliminf
 * @property float $NLimSup
 * @property string $LActiva
 * @property string $LLinUsa
 * @property string $LLinPre
 * @property string $CNroPar
 * @property float $NMonDes
 * @property int $CTipDes
 * @property float $NDesUso
 * @property string $LadMon
 * @property string $Ladmin
 * @property string $CCodUsu
 * @property Carbon $DFecMod
 *
 * @package App\Models
 */
class Cretlin extends Model
{
	protected $table = 'cretlin';
	protected $primaryKey = 'CNroLin';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'DFecVig' => 'datetime',
		'NTasInt' => 'float',
		'NTasMor' => 'float',
		'Nliminf' => 'float',
		'NLimSup' => 'float',
		'NMonDes' => 'float',
		'CTipDes' => 'int',
		'NDesUso' => 'float',
		'DFecMod' => 'datetime'
	];

	protected $fillable = [
		'CCodLin',
		'DFecVig',
		'CDesLin',
		'NTasInt',
		'CTipCal',
		'NTasMor',
		'Nliminf',
		'NLimSup',
		'LActiva',
		'LLinUsa',
		'LLinPre',
		'CNroPar',
		'NMonDes',
		'CTipDes',
		'NDesUso',
		'LadMon',
		'Ladmin',
		'CCodUsu',
		'DFecMod'
	];
}
