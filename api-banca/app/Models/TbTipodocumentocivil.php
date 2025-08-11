<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TbTipodocumentocivil
 * 
 * @property int $id_TipoDocumentoCivil
 * @property string $TipoDocumentoCivil
 *
 * @package App\Models
 */
class TbTipodocumentocivil extends Model
{
	protected $table = 'tb_tipodocumentocivil';
	protected $primaryKey = 'id_TipoDocumentoCivil';
	public $timestamps = false;

	protected $fillable = [
		'TipoDocumentoCivil'
	];
}
