<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TbAgencium
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
 * @property Collection|CtbSectoresAgencium[] $ctb_sectores_agencia
 * @property Collection|TbConfiguracionesDocumento[] $tb_configuraciones_documentos
 *
 * @package App\Models
 */
class TbAgencium extends Model
{
	protected $table = 'tb_agencia';
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

	public function ctb_sectores_agencia()
	{
		return $this->hasMany(CtbSectoresAgencium::class, 'id_agencia');
	}

	public function tb_configuraciones_documentos()
	{
		return $this->hasMany(TbConfiguracionesDocumento::class, 'agencia_id');
	}
}
