<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TbConfiguracione
 * 
 * @property int $id
 * @property int $id_config
 * @property string|null $valor
 * @property string|null $observaciones
 *
 * @package App\Models
 */
class TbConfiguracione extends Model
{
	protected $table = 'tb_configuraciones';
	public $timestamps = false;

	protected $casts = [
		'id_config' => 'int'
	];

	protected $fillable = [
		'id_config',
		'valor',
		'observaciones'
	];
}
