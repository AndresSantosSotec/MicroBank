<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TbCredito
 * 
 * @property int $id_Credito
 * @property string $Credito
 * @property string $abre
 * @property string $descr
 *
 * @package App\Models
 */
class TbCredito extends Model
{
	protected $table = 'tb_credito';
	protected $primaryKey = 'id_Credito';
	public $timestamps = false;

	protected $fillable = [
		'Credito',
		'abre',
		'descr'
	];
}
