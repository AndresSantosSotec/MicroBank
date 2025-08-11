<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Departamento
 * 
 * @property int $codigo_departamento
 * @property string $nombre
 * @property string|null $cod_crediref
 * 
 * @property Collection|Municipio[] $municipios
 *
 * @package App\Models
 */
class Departamento extends Model
{
	protected $table = 'departamentos';
	protected $primaryKey = 'codigo_departamento';
	public $timestamps = false;

	protected $fillable = [
		'nombre',
		'cod_crediref'
	];

	public function municipios()
	{
		return $this->hasMany(Municipio::class, 'codigo_departamento1');
	}
}
