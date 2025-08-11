<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class CtbSectore
 * 
 * @property int $id
 * @property string|null $nombre
 * @property string|null $descripcion
 * @property bool $estado
 * @property int|null $created_by
 * @property int|null $updated_by
 * @property int|null $deleted_by
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Collection|CtbSectoresAgencium[] $ctb_sectores_agencia
 *
 * @package App\Models
 */
class CtbSectore extends Model
{
	use SoftDeletes;
	protected $table = 'ctb_sectores';

	protected $casts = [
		'estado' => 'bool',
		'created_by' => 'int',
		'updated_by' => 'int',
		'deleted_by' => 'int'
	];

	protected $fillable = [
		'nombre',
		'descripcion',
		'estado',
		'created_by',
		'updated_by',
		'deleted_by'
	];

	public function ctb_sectores_agencia()
	{
		return $this->hasMany(CtbSectoresAgencium::class, 'id_sector');
	}
}
