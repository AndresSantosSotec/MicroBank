<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class InstiDt
 * 
 * @property string $cod_insti
 * @property string $Name_insti
 * @property string $short
 * @property string $ubica
 * @property string $nit
 *
 * @package App\Models
 */
class InstiDt extends Model
{
	protected $table = 'insti_dts';
	protected $primaryKey = 'cod_insti';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'Name_insti',
		'short',
		'ubica',
		'nit'
	];
}
