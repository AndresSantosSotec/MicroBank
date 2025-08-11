<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CtbChq
 * 
 * @property int $id
 * @property int $id_ctb_diario
 * @property int $id_cuenta_banco
 * @property string $numchq
 * @property string $nomchq
 * @property float $monchq
 * @property int $modocheque
 * @property string $emitido
 * 
 * @property CtbBanco $ctb_banco
 * @property CtbDiario $ctb_diario
 *
 * @package App\Models
 */
class CtbChq extends Model
{
	protected $table = 'ctb_chq';
	public $timestamps = false;

	protected $casts = [
		'id_ctb_diario' => 'int',
		'id_cuenta_banco' => 'int',
		'monchq' => 'float',
		'modocheque' => 'int'
	];

	protected $fillable = [
		'id_ctb_diario',
		'id_cuenta_banco',
		'numchq',
		'nomchq',
		'monchq',
		'modocheque',
		'emitido'
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
