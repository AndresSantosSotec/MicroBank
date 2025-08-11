<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CvEscenario
 * 
 * @property int $id
 * @property int|null $cod_escenario
 * @property int|null $id_frases
 * @property string|null $escenario
 * @property string|null $efecto
 * @property string|null $nombre
 * @property string|null $tipo_dte
 * @property string|null $frase_automatica
 * 
 * @property CvFrase|null $cv_frase
 * @property Collection|CvFacturaFrase[] $cv_factura_frases
 *
 * @package App\Models
 */
class CvEscenario extends Model
{
	protected $table = 'cv_escenarios';
	public $timestamps = false;

	protected $casts = [
		'cod_escenario' => 'int',
		'id_frases' => 'int'
	];

	protected $fillable = [
		'cod_escenario',
		'id_frases',
		'escenario',
		'efecto',
		'nombre',
		'tipo_dte',
		'frase_automatica'
	];

	public function cv_frase()
	{
		return $this->belongsTo(CvFrase::class, 'id_frases');
	}

	public function cv_factura_frases()
	{
		return $this->hasMany(CvFacturaFrase::class, 'id_escenario');
	}
}
