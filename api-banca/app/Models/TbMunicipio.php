<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TbMunicipio
 * 
 * @property int $id
 * @property string $codigo_municipio
 * @property int $codigo_departamento
 * @property string $nombre
 * @property string|null $cod_crediref
 *
 * @package App\Models
 */
class TbMunicipio extends Model
{
	protected $table = 'tb_municipios';
	public $timestamps = false;

	protected $casts = [
		'codigo_departamento' => 'int'
	];

	protected $fillable = [
		'codigo_municipio',
		'codigo_departamento',
		'nombre',
		'cod_crediref'
	];
}
