<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CliAtributo
 * 
 * @property int $id
 * @property string|null $nombre
 * @property string|null $tipo
 * @property string|null $descripcion
 *
 * @package App\Models
 */
class CliAtributo extends Model
{
	protected $table = 'cli_atributos';
	public $timestamps = false;

	protected $fillable = [
		'nombre',
		'tipo',
		'descripcion'
	];
}
