<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TbGarantiasCredito
 * 
 * @property int $id
 * @property string|null $id_cremcre_meta
 * @property int|null $id_garantia
 * 
 * @property CliGarantium|null $cli_garantium
 *
 * @package App\Models
 */
class TbGarantiasCredito extends Model
{
	protected $table = 'tb_garantias_creditos';
	public $timestamps = false;

	protected $casts = [
		'id_garantia' => 'int'
	];

	protected $fillable = [
		'id_cremcre_meta',
		'id_garantia'
	];

	public function cli_garantium()
	{
		return $this->belongsTo(CliGarantium::class, 'id_garantia');
	}
}
