<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CtbBanMov
 * 
 * @property int $id
 * @property int $id_ctb_diario
 * @property int|null $id_cuenta_banco
 * @property string $destino
 * 
 * @property CtbBanco|null $ctb_banco
 * @property CtbDiario $ctb_diario
 *
 * @package App\Models
 */
class CtbBanMov extends Model
{
	protected $table = 'ctb_ban_mov';
	public $timestamps = false;

	protected $casts = [
		'id_ctb_diario' => 'int',
		'id_cuenta_banco' => 'int'
	];

	protected $fillable = [
		'id_ctb_diario',
		'id_cuenta_banco',
		'destino'
	];

	public function ctb_banco()
	{
		return $this->belongsTo(CtbBanco::class, 'id_cuenta_banco');
	}

	public function ctb_diario()
	{
		return $this->belongsTo(CtbDiario::class, 'id_ctb_diario');
	}
}
