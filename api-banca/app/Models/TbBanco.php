<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TbBanco
 * 
 * @property int $id
 * @property string $nombre
 * @property string $estado
 * @property string $abreviatura
 * 
 * @property Collection|CtbBanco[] $ctb_bancos
 *
 * @package App\Models
 */
class TbBanco extends Model
{
	protected $table = 'tb_bancos';
	public $timestamps = false;

	protected $fillable = [
		'nombre',
		'estado',
		'abreviatura'
	];

	public function ctb_bancos()
	{
		return $this->hasMany(CtbBanco::class, 'id_banco');
	}
}
