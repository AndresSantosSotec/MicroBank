<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ClientesCrediref
 * 
 * @property string $idcod_cliente
 * @property string $tipo
 * @property string|null $primer_name
 * @property string|null $segundo_name
 * @property string|null $tercer_name
 * @property string|null $primer_last
 * @property string|null $segundo_last
 * @property string|null $casada_last
 * @property Carbon $date_birth
 * @property string $genero
 * @property string $estado_civil
 * @property string $type_doc
 * @property string $no_identifica
 * @property string $no_tributaria
 * @property string $no_igss
 * @property string $nacionalidad
 * @property string $muni_extiende
 * @property string $tel_no1
 * @property string $tel_no2
 * @property string $Direccion
 * @property string|null $CCODCTA
 * @property string|null $CESTADO
 * @property Carbon|null $DFecDsbls
 * @property Carbon|null $fecha_operacion
 * @property string|null $municipio
 * @property string|null $codigo_postal
 *
 * @package App\Models
 */
class ClientesCrediref extends Model
{
	protected $table = 'clientesCrediref';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'date_birth' => 'datetime',
		'DFecDsbls' => 'datetime',
		'fecha_operacion' => 'datetime'
	];

	protected $fillable = [
		'idcod_cliente',
		'tipo',
		'primer_name',
		'segundo_name',
		'tercer_name',
		'primer_last',
		'segundo_last',
		'casada_last',
		'date_birth',
		'genero',
		'estado_civil',
		'type_doc',
		'no_identifica',
		'no_tributaria',
		'no_igss',
		'nacionalidad',
		'muni_extiende',
		'tel_no1',
		'tel_no2',
		'Direccion',
		'CCODCTA',
		'CESTADO',
		'DFecDsbls',
		'fecha_operacion',
		'municipio',
		'codigo_postal'
	];
}
