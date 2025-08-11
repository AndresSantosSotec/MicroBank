<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TbPeriodo
 * 
 * @property int $id_TipoCredito
 * @property string $TipoCredito
 * @property string $nombre
 * @property string $periodo
 *
 * @package App\Models
 */
class TbPeriodo extends Model
{
	protected $table = 'tb_periodo';
	protected $primaryKey = 'id_TipoCredito';
	public $timestamps = false;

	protected $fillable = [
		'TipoCredito',
		'nombre',
		'periodo'
	];
}
