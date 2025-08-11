<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TbDestinocredito
 * 
 * @property int $id_DestinoCredito
 * @property string $DestinoCredito
 * @property int|null $cod_crediref
 *
 * @package App\Models
 */
class TbDestinocredito extends Model
{
	protected $table = 'tb_destinocredito';
	protected $primaryKey = 'id_DestinoCredito';
	public $timestamps = false;

	protected $casts = [
		'cod_crediref' => 'int'
	];

	protected $fillable = [
		'DestinoCredito',
		'cod_crediref'
	];
}
