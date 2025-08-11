<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CremcreMetum
 * 
 * @property string $CCODCTA
 * @property string $CodCli
 * @property string $CCODPRD
 * @property string $CODAgencia
 * @property string $CodAnal
 * @property string $Cestado
 * @property Carbon $DfecSol
 * @property Carbon $DFecAnal
 * @property Carbon $DFecApr
 * @property Carbon $DsmblsAproba
 * @property Carbon|null $DFecDsbls
 * @property string $ActoEcono
 * @property string $CTipCon
 * @property float $NMonCuo
 * @property string $CtipCre
 * @property string $NtipPerC
 * @property int|null $peripagcap
 * @property int|null $afectaInteres
 * @property string $Cdescre
 * @property string $CAldea
 * @property string $CodMuni
 * @property int $NDiaGra
 * @property float $Plazo
 * @property float $NDesApr
 * @property Carbon $DFecVig
 * @property Carbon|null $DFecVen
 * @property Carbon|null $fecincobrable
 * @property int $NDesEje
 * @property float $NCapPag
 * @property float $AhoPrgPag
 * @property float $NIntPag
 * @property float $NMorPag
 * @property float $NCapDes
 * @property string|null $CConDic
 * @property int $NDiaAtr
 * @property string $CCalif
 * @property Carbon $DUltPag
 * @property string $CMarJud
 * @property string $CSecEco
 * @property string $CCodGrupo
 * @property int $NAhoPrg
 * @property string $CCodAho
 * @property string $Cpagare
 * @property float|null $GarantiasCantidad
 * @property int|null $PlazoRefi
 * @property Carbon $DfecIngreRefina
 * @property Carbon $DfecVenciRefina
 * @property string $ActaOp
 * @property string $SoliCop
 * @property string $CODFIA
 * @property int $id_pro_gas
 * @property int|null $moduloafecta
 * @property string $cntAho
 * @property Carbon $DfecPago
 * @property float $MontoSol
 * @property float $MonSug
 * @property string $TipoEnti
 * @property int $CtipCuo
 * @property int|null $cuotassolicita
 * @property string $noPeriodo
 * @property string $Dictamen
 * @property float $NIntApro
 * @property int $NCiclo
 * @property string|null $crecimiento
 * @property string|null $recomendacion
 * @property Carbon $fecha_operacion
 * @property float $P_ahoCr
 * @property string $TipDocDes
 * @property string|null $id_rechazo_cred
 *
 * @package App\Models
 */
class CremcreMetum extends Model
{
	protected $table = 'cremcre_meta';
	protected $primaryKey = 'CCODCTA';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'DfecSol' => 'datetime',
		'DFecAnal' => 'datetime',
		'DFecApr' => 'datetime',
		'DsmblsAproba' => 'datetime',
		'DFecDsbls' => 'datetime',
		'NMonCuo' => 'float',
		'peripagcap' => 'int',
		'afectaInteres' => 'int',
		'NDiaGra' => 'int',
		'Plazo' => 'float',
		'NDesApr' => 'float',
		'DFecVig' => 'datetime',
		'DFecVen' => 'datetime',
		'fecincobrable' => 'datetime',
		'NDesEje' => 'int',
		'NCapPag' => 'float',
		'AhoPrgPag' => 'float',
		'NIntPag' => 'float',
		'NMorPag' => 'float',
		'NCapDes' => 'float',
		'NDiaAtr' => 'int',
		'DUltPag' => 'datetime',
		'NAhoPrg' => 'int',
		'GarantiasCantidad' => 'float',
		'PlazoRefi' => 'int',
		'DfecIngreRefina' => 'datetime',
		'DfecVenciRefina' => 'datetime',
		'id_pro_gas' => 'int',
		'moduloafecta' => 'int',
		'DfecPago' => 'datetime',
		'MontoSol' => 'float',
		'MonSug' => 'float',
		'CtipCuo' => 'int',
		'cuotassolicita' => 'int',
		'NIntApro' => 'float',
		'NCiclo' => 'int',
		'fecha_operacion' => 'datetime',
		'P_ahoCr' => 'float'
	];

	protected $fillable = [
		'CodCli',
		'CCODPRD',
		'CODAgencia',
		'CodAnal',
		'Cestado',
		'DfecSol',
		'DFecAnal',
		'DFecApr',
		'DsmblsAproba',
		'DFecDsbls',
		'ActoEcono',
		'CTipCon',
		'NMonCuo',
		'CtipCre',
		'NtipPerC',
		'peripagcap',
		'afectaInteres',
		'Cdescre',
		'CAldea',
		'CodMuni',
		'NDiaGra',
		'Plazo',
		'NDesApr',
		'DFecVig',
		'DFecVen',
		'fecincobrable',
		'NDesEje',
		'NCapPag',
		'AhoPrgPag',
		'NIntPag',
		'NMorPag',
		'NCapDes',
		'CConDic',
		'NDiaAtr',
		'CCalif',
		'DUltPag',
		'CMarJud',
		'CSecEco',
		'CCodGrupo',
		'NAhoPrg',
		'CCodAho',
		'Cpagare',
		'GarantiasCantidad',
		'PlazoRefi',
		'DfecIngreRefina',
		'DfecVenciRefina',
		'ActaOp',
		'SoliCop',
		'CODFIA',
		'id_pro_gas',
		'moduloafecta',
		'cntAho',
		'DfecPago',
		'MontoSol',
		'MonSug',
		'TipoEnti',
		'CtipCuo',
		'cuotassolicita',
		'noPeriodo',
		'Dictamen',
		'NIntApro',
		'NCiclo',
		'crecimiento',
		'recomendacion',
		'fecha_operacion',
		'P_ahoCr',
		'TipDocDes',
		'id_rechazo_cred'
	];
}
