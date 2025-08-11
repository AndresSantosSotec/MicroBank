<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TbMoneda
 * 
 * @property int $id
 * @property string $nombre
 * @property string $abr
 * @property float $equiDolar
 * @property float|null $IVA
 * 
 * @property Collection|CtbDiario[] $ctb_diarios
 *
 * @package App\Models
 */
class TbMoneda extends Model
{
	protected $table = 'tb_monedas';
	public $timestamps = false;

	protected $casts = [
		'equiDolar' => 'float',
		'IVA' => 'float'
	];

	protected $fillable = [
		'nombre',
		'abr',
		'equiDolar',
		'IVA'
	];

	public function ctb_diarios()
	{
		return $this->hasMany(CtbDiario::class, 'id_tb_moneda');
	}
}
