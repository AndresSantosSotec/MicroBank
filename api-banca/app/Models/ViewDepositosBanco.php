<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ViewDepositosBanco
 * 
 * @property int $id
 * @property string $numcom
 * @property Carbon $feccnt
 * @property float|null $debe
 * @property float|null $haber
 * @property int|null $id_agencia
 *
 * @package App\Models
 */
class ViewDepositosBanco extends Model
{
	protected $table = 'view_depositos_bancos';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'feccnt' => 'datetime',
		'debe' => 'float',
		'haber' => 'float',
		'id_agencia' => 'int'
	];

	protected $fillable = [
		'id',
		'numcom',
		'feccnt',
		'debe',
		'haber',
		'id_agencia'
	];
}
