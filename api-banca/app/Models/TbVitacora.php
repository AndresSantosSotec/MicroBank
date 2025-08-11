<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TbVitacora
 * 
 * @property int $id_vitacora
 * @property int $cod_agen
 * @property string $colab_usu
 * @property int $proc
 * @property int $descrip
 * @property Carbon $date_sys
 *
 * @package App\Models
 */
class TbVitacora extends Model
{
	protected $table = 'tb_vitacora';
	protected $primaryKey = 'id_vitacora';
	public $timestamps = false;

	protected $casts = [
		'cod_agen' => 'int',
		'proc' => 'int',
		'descrip' => 'int',
		'date_sys' => 'datetime'
	];

	protected $fillable = [
		'cod_agen',
		'colab_usu',
		'proc',
		'descrip',
		'date_sys'
	];
}
