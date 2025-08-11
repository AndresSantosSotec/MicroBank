<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TbRTEUse
 * 
 * @property int $Id_RTE
 * @property string|null $ccdocta
 * @property string|null $Nombre1
 * @property string|null $Nombre2
 * @property string|null $Nombre3
 * @property string|null $Apellido1
 * @property string|null $Apellido2
 * @property string|null $Apellido_de_casada
 * @property string|null $DPI
 * @property string|null $ori_fondos
 * @property string|null $desti_fondos
 * @property string|null $Nacionalidad
 * @property float|null $Mon
 * @property string|null $Crateby
 * @property Carbon|null $Cretadate
 * @property string|null $Updateby
 * @property Carbon|null $Updatedate
 * @property string|null $Deleteby
 * @property Carbon|null $Deletedate
 * @property bool|null $recurrente
 * @property bool $propietario
 *
 * @package App\Models
 */
class TbRTEUse extends Model
{
	protected $table = 'tb_RTE_use';
	protected $primaryKey = 'Id_RTE';
	public $timestamps = false;

	protected $casts = [
		'Mon' => 'float',
		'Cretadate' => 'datetime',
		'Updatedate' => 'datetime',
		'Deletedate' => 'datetime',
		'recurrente' => 'bool',
		'propietario' => 'bool'
	];

	protected $fillable = [
		'ccdocta',
		'Nombre1',
		'Nombre2',
		'Nombre3',
		'Apellido1',
		'Apellido2',
		'Apellido_de_casada',
		'DPI',
		'ori_fondos',
		'desti_fondos',
		'Nacionalidad',
		'Mon',
		'Crateby',
		'Cretadate',
		'Updateby',
		'Updatedate',
		'Deleteby',
		'Deletedate',
		'recurrente',
		'propietario'
	];
}
