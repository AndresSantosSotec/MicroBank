<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class VsCliSolicitantesIndi
 * 
 * @property string $codcli
 * @property string|null $nombre
 * @property string $direccion
 * @property int|null $ciclo
 *
 * @package App\Models
 */
class VsCliSolicitantesIndi extends Model
{
	protected $table = 'vs_cli_solicitantes_indi';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ciclo' => 'int'
	];

	protected $fillable = [
		'codcli',
		'nombre',
		'direccion',
		'ciclo'
	];
}
