<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CtbDiarioMov
 * 
 * @property int $id_tipopol
 * @property string $tipopol
 * @property int $id
 * @property int $id_ctb_diario
 * @property int $id_fuente_fondo
 * @property string $fuente_fondo_des
 * @property string $numcom
 * @property string $numdoc
 * @property int $id_ctb_nomenclatura
 * @property string $ccodcta
 * @property string $cdescrip
 * @property float $debe
 * @property float $haber
 * @property string $glosa
 * @property Carbon $feccnt
 * @property Carbon $fecdoc
 * @property int $id_tb_usu
 * @property int $id_agencia
 * @property int|null $id_agencia2
 * @property int $estado
 * @property string $nombrecheque
 * @property int $orden
 *
 * @package App\Models
 */
class CtbDiarioMov extends Model
{
	protected $table = 'ctb_diario_mov';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_tipopol' => 'int',
		'id' => 'int',
		'id_ctb_diario' => 'int',
		'id_fuente_fondo' => 'int',
		'id_ctb_nomenclatura' => 'int',
		'debe' => 'float',
		'haber' => 'float',
		'feccnt' => 'datetime',
		'fecdoc' => 'datetime',
		'id_tb_usu' => 'int',
		'id_agencia' => 'int',
		'id_agencia2' => 'int',
		'estado' => 'int',
		'orden' => 'int'
	];

	protected $fillable = [
		'id_tipopol',
		'tipopol',
		'id',
		'id_ctb_diario',
		'id_fuente_fondo',
		'fuente_fondo_des',
		'numcom',
		'numdoc',
		'id_ctb_nomenclatura',
		'ccodcta',
		'cdescrip',
		'debe',
		'haber',
		'glosa',
		'feccnt',
		'fecdoc',
		'id_tb_usu',
		'id_agencia',
		'id_agencia2',
		'estado',
		'nombrecheque',
		'orden'
	];
}
