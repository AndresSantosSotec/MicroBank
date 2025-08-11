<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class TbDocumentosTransaccione
 * 
 * @property int $id
 * @property int $id_modulo
 * @property int $tipo
 * @property string $nombre
 * @property int $id_cuenta_contable
 * @property bool $estado
 * @property int|null $created_by
 * @property int|null $updated_by
 * @property int|null $deleted_by
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property CtbNomenclatura $ctb_nomenclatura
 *
 * @package App\Models
 */
class TbDocumentosTransaccione extends Model
{
	use SoftDeletes;
	protected $table = 'tb_documentos_transacciones';

	protected $casts = [
		'id_modulo' => 'int',
		'tipo' => 'int',
		'id_cuenta_contable' => 'int',
		'estado' => 'bool',
		'created_by' => 'int',
		'updated_by' => 'int',
		'deleted_by' => 'int'
	];

	protected $fillable = [
		'id_modulo',
		'tipo',
		'nombre',
		'id_cuenta_contable',
		'estado',
		'created_by',
		'updated_by',
		'deleted_by'
	];

	public function ctb_nomenclatura()
	{
		return $this->belongsTo(CtbNomenclatura::class, 'id_cuenta_contable');
	}
}
