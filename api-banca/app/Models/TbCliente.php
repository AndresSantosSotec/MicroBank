<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use App\Models\CliGarantium;

/**
 * Class TbCliente
 *
 * @property string $idcod_cliente
 * @property string $id_tipoCliente
 * @property string $agencia
 * @property string|null $primer_name
 * @property string|null $segundo_name
 * @property string|null $tercer_name
 * @property string|null $primer_last
 * @property string|null $segundo_last
 * @property string|null $casada_last
 * @property string|null $short_name
 * @property string|null $compl_name
 * @property string $url_img
 * @property Carbon $date_birth
 * @property string $genero
 * @property string $estado_civil
 * @property string|null $origen
 * @property string|null $pais_nacio
 * @property string|null $depa_nacio
 * @property string|null $muni_nacio
 * @property string|null $aldea
 * @property string $type_doc
 * @property string $no_identifica
 * @property string $pais_extiende
 * @property string $nacionalidad
 * @property string $depa_extiende
 * @property string $muni_extiende
 * @property string $otra_nacion
 * @property string $identi_tribu
 * @property string $no_tributaria
 * @property string $no_igss
 * @property string|null $profesion
 * @property string $Direccion
 * @property string $depa_reside
 * @property string $muni_reside
 * @property string $aldea_reside
 * @property string $tel_no1
 * @property string $tel_no2
 * @property string $area
 * @property string $ano_reside
 * @property string $vivienda_Condi
 * @property string $email
 * @property string $relac_propo
 * @property float $monto_ingre
 * @property string $actu_Propio
 * @property string|null $representante_name
 * @property string $repre_calidad
 * @property string $id_religion
 * @property string $leer
 * @property string $escribir
 * @property string $firma
 * @property string|null $cargo_grupo
 * @property string $educa
 * @property string $idioma
 * @property string $Rel_insti
 * @property string $datos_Adicionales
 * @property string|null $Conyuge
 * @property string|null $telconyuge
 * @property string|null $zona
 * @property string|null $barrio
 * @property int|null $hijos
 * @property int|null $dependencia
 * @property string|null $Nomb_Ref1
 * @property string|null $Nomb_Ref2
 * @property string|null $Nomb_Ref3
 * @property string $Tel_Ref1
 * @property string $Tel_Ref2
 * @property string $Tel_Ref3
 * @property string $PEP
 * @property string $CPE
 * @property string|null $control_interno
 * @property string|null $estado
 * @property int|null $created_by
 * @property int|null $updated_by
 * @property Carbon|null $fecha_alta
 * @property Carbon|null $fecha_baja
 * @property Carbon|null $fecha_mod
 * @property int|null $deleted_by
 * @property int|null $id_tb_cli_balance
 * @property int|null $parentesco1
 * @property int|null $parentesco2
 * @property int|null $parentesco3
 * @property int|null $fiador
 * @property string|null $observaciones
 *
 * @package App\Models
 */
class TbCliente extends Model
{
	protected $table = 'tb_cliente';
	protected $primaryKey = 'idcod_cliente';
	public $incrementing = false;
	public $timestamps = false;

        // 🔹 Usar la conexión secundaria
    protected $connection = 'banana';

	protected $casts = [
		'date_birth' => 'datetime',
		'monto_ingre' => 'float',
		'hijos' => 'int',
		'dependencia' => 'int',
		'created_by' => 'int',
		'updated_by' => 'int',
		'fecha_alta' => 'datetime',
		'fecha_baja' => 'datetime',
		'fecha_mod' => 'datetime',
		'deleted_by' => 'int',
		'id_tb_cli_balance' => 'int',
		'parentesco1' => 'int',
		'parentesco2' => 'int',
		'parentesco3' => 'int',
		'fiador' => 'int'
	];

	protected $fillable = [
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
		'id_religion',
		'leer',
		'escribir',
		'firma',
		'cargo_grupo',
		'educa',
		'idioma',
		'Rel_insti',
		'datos_Adicionales',
		'Conyuge',
		'telconyuge',
		'zona',
		'barrio',
		'hijos',
		'dependencia',
		'Nomb_Ref1',
		'Nomb_Ref2',
		'Nomb_Ref3',
		'Tel_Ref1',
		'Tel_Ref2',
		'Tel_Ref3',
		'PEP',
		'CPE',
		'control_interno',
		'estado',
		'created_by',
		'updated_by',
		'fecha_alta',
		'fecha_baja',
		'fecha_mod',
		'deleted_by',
		'id_tb_cli_balance',
		'parentesco1',
		'parentesco2',
		'parentesco3',
		'fiador',
		'observaciones'
	];
        public function garantias()
    {
        // FK en cli_garantia.idCliente → PK string en tb_cliente.idcod_cliente
        return $this->hasMany(CliGarantium::class, 'idCliente', 'idcod_cliente');
    }


}
