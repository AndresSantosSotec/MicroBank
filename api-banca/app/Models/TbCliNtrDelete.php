<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TbCliNtrDelete
 * 
 * @property string $idcod_cliente
 * @property int $id_tipoCliente
 * @property string $agencia
 * @property string|null $primer_name
 * @property string|null $segundo_name
 * @property string|null $tercer_name
 * @property string|null $primer_last
 * @property string|null $segundo_last
 * @property string|null $casada_last
 * @property string|null $short_name
 * @property string|null $compl_name
 * @property string|null $url_img
 * @property Carbon|null $date_birth
 * @property string|null $genero
 * @property string|null $estado_civil
 * @property string|null $origen
 * @property string|null $pais_nacio
 * @property string|null $depa_nacio
 * @property string|null $muni_nacio
 * @property string|null $aldea
 * @property string|null $type_doc
 * @property int|null $no_identifica
 * @property string|null $pais_extiende
 * @property string|null $nacionalidad
 * @property string|null $depa_extiende
 * @property string|null $muni_extiende
 * @property string|null $otra_nacion
 * @property string|null $identi_tribu
 * @property int|null $no_tributaria
 * @property int|null $no_igss
 * @property string|null $profesion
 * @property string|null $Direccion
 * @property string|null $depa_reside
 * @property string|null $muni_reside
 * @property string|null $aldea_reside
 * @property int|null $tel_no1
 * @property int|null $tel_no2
 * @property string|null $area
 * @property int|null $ano_reside
 * @property string|null $vivienda_Condi
 * @property int|null $email
 * @property int|null $relac_propo
 * @property float|null $monto_ingre
 * @property string|null $actu_Propio
 * @property string|null $representante_name
 * @property string|null $repre_calidad
 * @property string|null $firma
 * @property string|null $cargo_grupo
 * @property string|null $educa
 * @property string|null $idioma
 * @property string|null $Rel_insti
 * @property string|null $datos_Adicionales
 * @property string|null $Conyuge
 * @property string|null $Nomb_Ref1
 * @property string|null $Nomb_Ref2
 * @property int|null $Nomb_Ref3
 * @property int|null $Tel_Ref1
 * @property int|null $Tel_Ref2
 * @property int|null $Tel_Ref3
 *
 * @package App\Models
 */
class TbCliNtrDelete extends Model
{
	protected $table = 'tb_cli_ntr_delete';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_tipoCliente' => 'int',
		'date_birth' => 'datetime',
		'no_identifica' => 'int',
		'no_tributaria' => 'int',
		'no_igss' => 'int',
		'tel_no1' => 'int',
		'tel_no2' => 'int',
		'ano_reside' => 'int',
		'email' => 'int',
		'relac_propo' => 'int',
		'monto_ingre' => 'float',
		'Nomb_Ref3' => 'int',
		'Tel_Ref1' => 'int',
		'Tel_Ref2' => 'int',
		'Tel_Ref3' => 'int'
	];

	protected $fillable = [
		'idcod_cliente',
		'id_tipoCliente',
		'agencia',
		'primer_name',
		'segundo_name',
		'tercer_name',
		'primer_last',
		'segundo_last',
		'casada_last',
		'short_name',
		'compl_name',
		'url_img',
		'date_birth',
		'genero',
		'estado_civil',
		'origen',
		'pais_nacio',
		'depa_nacio',
		'muni_nacio',
		'aldea',
		'type_doc',
		'no_identifica',
		'pais_extiende',
		'nacionalidad',
		'depa_extiende',
		'muni_extiende',
		'otra_nacion',
		'identi_tribu',
		'no_tributaria',
		'no_igss',
		'profesion',
		'Direccion',
		'depa_reside',
		'muni_reside',
		'aldea_reside',
		'tel_no1',
		'tel_no2',
		'area',
		'ano_reside',
		'vivienda_Condi',
		'email',
		'relac_propo',
		'monto_ingre',
		'actu_Propio',
		'representante_name',
		'repre_calidad',
		'firma',
		'cargo_grupo',
		'educa',
		'idioma',
		'Rel_insti',
		'datos_Adicionales',
		'Conyuge',
		'Nomb_Ref1',
		'Nomb_Ref2',
		'Nomb_Ref3',
		'Tel_Ref1',
		'Tel_Ref2',
		'Tel_Ref3'
	];
}
