<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Ahotestigo
 * 
 * @property int $id
 * @property int $id_certificado
 * @property string|null $nombre
 * @property string|null $dpi
 * @property string|null $direccion
 * @property string|null $telefono
 *
 * @package App\Models
 */
class Ahotestigo extends Model
{
	protected $table = 'ahotestigos';
	public $timestamps = false;

	protected $casts = [
		'id_certificado' => 'int'
	];

	protected $fillable = [
		'id_certificado',
		'nombre',
		'dpi',
		'direccion',
		'telefono'
	];
}
