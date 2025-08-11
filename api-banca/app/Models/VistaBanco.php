<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VistaBanco
 * 
 * @property int $id
 * @property string $numcom
 * @property Carbon $feccnt
 * @property float|null $debe
 * @property float|null $haber
 * @property float $moncheque
 * @property string $estado
 * @property string $numchq
 * @property int|null $id_agencia
 *
 * @package App\Models
 */
class VistaBanco extends Model
{
	protected $table = 'vista_bancos';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'feccnt' => 'datetime',
		'debe' => 'float',
		'haber' => 'float',
		'moncheque' => 'float',
		'id_agencia' => 'int'
	];

	protected $fillable = [
		'id',
		'numcom',
		'feccnt',
		'debe',
		'haber',
		'moncheque',
		'estado',
		'numchq',
		'id_agencia'
	];
}
