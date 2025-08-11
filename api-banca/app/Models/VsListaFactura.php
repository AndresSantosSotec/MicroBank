<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VsListaFactura
 * 
 * @property int $id
 * @property string|null $no_autorizacion
 * @property string|null $serie
 * @property Carbon|null $fechahora_emision
 * @property string|null $emisor
 * @property string|null $receptor
 * @property int|null $estado
 * @property int|null $tipo
 *
 * @package App\Models
 */
class VsListaFactura extends Model
{
	protected $table = 'vs_lista_facturas';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'fechahora_emision' => 'datetime',
		'estado' => 'int',
		'tipo' => 'int'
	];

	protected $fillable = [
		'id',
		'no_autorizacion',
		'serie',
		'fechahora_emision',
		'emisor',
		'receptor',
		'estado',
		'tipo'
	];
}
