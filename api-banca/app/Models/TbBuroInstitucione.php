<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TbBuroInstitucione
 * 
 * @property int $id
 * @property string|null $nombre_corto
 * @property string|null $nombre_completo
 * 
 * @property Collection|TbInfoinstitucionesBuro[] $tb_infoinstituciones_buros
 *
 * @package App\Models
 */
class TbBuroInstitucione extends Model
{
	protected $table = 'tb_buro_instituciones';
	public $timestamps = false;

	protected $fillable = [
		'nombre_corto',
		'nombre_completo'
	];

	public function tb_infoinstituciones_buros()
	{
		return $this->hasMany(TbInfoinstitucionesBuro::class, 'id_buro');
	}
}
