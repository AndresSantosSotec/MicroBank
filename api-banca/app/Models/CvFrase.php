<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CvFrase
 * 
 * @property int $id
 * @property string|null $nombre
 * @property string|null $descripcion
 * 
 * @property Collection|CvEscenario[] $cv_escenarios
 *
 * @package App\Models
 */
class CvFrase extends Model
{
	protected $table = 'cv_frases';
	public $timestamps = false;

	protected $fillable = [
		'nombre',
		'descripcion'
	];

	public function cv_escenarios()
	{
		return $this->hasMany(CvEscenario::class, 'id_frases');
	}
}
