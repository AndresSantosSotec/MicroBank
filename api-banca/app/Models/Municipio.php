<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Municipio
 * 
 * @property string $codigo_municipio
 * @property int $codigo_departamento1
 * @property string $nombre
 * @property string|null $cod_crediref
 * 
 * @property Departamento $departamento
 *
 * @package App\Models
 */
class Municipio extends Model
{
	protected $table = 'municipios';
	protected $primaryKey = 'codigo_municipio';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'codigo_departamento1' => 'int'
	];

	protected $fillable = [
		'codigo_departamento1',
		'nombre',
		'cod_crediref'
	];

	public function departamento()
	{
		return $this->belongsTo(Departamento::class, 'codigo_departamento1');
	}
}
