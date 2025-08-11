<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Productoscli
 * 
 * @property int $iD_Prod
 * @property string $ccodcli
 * @property string $ctiprod
 * @property string $nnompro
 * @property string $descriprod
 * @property string $cdirec
 * @property string $munic
 * @property string $cmoneda
 * @property float $nvalpro
 * @property Carbon $cfecrea
 * @property string $Identf
 * @property string $NmDCont
 *
 * @package App\Models
 */
class Productoscli extends Model
{
	protected $table = 'productoscli';
	protected $primaryKey = 'iD_Prod';
	public $timestamps = false;

	protected $casts = [
		'nvalpro' => 'float',
		'cfecrea' => 'datetime'
	];

	protected $fillable = [
		'ccodcli',
		'ctiprod',
		'nnompro',
		'descriprod',
		'cdirec',
		'munic',
		'cmoneda',
		'nvalpro',
		'cfecrea',
		'Identf',
		'NmDCont'
	];
}
