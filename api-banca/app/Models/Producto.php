<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Producto
 * 
 * @property int $iD_Prod
 * @property string $ccodprdct
 * @property int $id_fondos
 * @property string $nnompro
 * @property string $descriprod
 * @property string $cdirec
 * @property string $munic
 * @property string $cmoneda
 * @property float $nvalpro
 * @property int $Plazo
 * @property float $TasaInteres
 * @property int $MontoMAx
 * @property bool $AddFiador
 * @property string $TipoCliente
 * @property Carbon $cfecrea
 * @property string $Identf
 * @property string $NmDCont
 * @property bool $Ahoprogra
 * @property float|null $Prc_aho
 * @property float|null $prc_mor
 * @property string $TipMora
 * 
 * @property CtbFuenteFondo $ctb_fuente_fondo
 *
 * @package App\Models
 */
class Producto extends Model
{
	protected $table = 'productos';
	protected $primaryKey = 'iD_Prod';
	public $timestamps = false;

	protected $casts = [
		'id_fondos' => 'int',
		'nvalpro' => 'float',
		'Plazo' => 'int',
		'TasaInteres' => 'float',
		'MontoMAx' => 'int',
		'AddFiador' => 'bool',
		'cfecrea' => 'datetime',
		'Ahoprogra' => 'bool',
		'Prc_aho' => 'float',
		'prc_mor' => 'float'
	];

	protected $fillable = [
		'ccodprdct',
		'id_fondos',
		'nnompro',
		'descriprod',
		'cdirec',
		'munic',
		'cmoneda',
		'nvalpro',
		'Plazo',
		'TasaInteres',
		'MontoMAx',
		'AddFiador',
		'TipoCliente',
		'cfecrea',
		'Identf',
		'NmDCont',
		'Ahoprogra',
		'Prc_aho',
		'prc_mor',
		'TipMora'
	];

	public function ctb_fuente_fondo()
	{
		return $this->belongsTo(CtbFuenteFondo::class, 'id_fondos');
	}
}
