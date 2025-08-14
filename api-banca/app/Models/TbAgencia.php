<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TbAgencia
 * 
 * @property int $id_agencia
 * @property string $nom_agencia
 * @property string $cod_agenc
 * @property int $id_nomenclatura_caja
 * @property int|null $id_institucion
 * @property string|null $municipio
 * @property string|null $departamento
 * @property string|null $pais
 * @property int|null $id_nomenclatura_juridico
 *
 * @package App\Models
 */
class TbAgencia extends Model
{
    protected $connection = 'banana';
	protected $table = 'tb_agencias';
	protected $primaryKey = 'id_agencia';
	public $timestamps = false;

	protected $casts = [
		'id_nomenclatura_caja' => 'int',
		'id_institucion' => 'int',
		'id_nomenclatura_juridico' => 'int'
	];

	protected $fillable = [
		'nom_agencia',
		'cod_agenc',
		'id_nomenclatura_caja',
		'id_institucion',
		'municipio',
		'departamento',
		'pais',
		'id_nomenclatura_juridico'
	];
}
