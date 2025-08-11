<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TnEtniaIdioma
 * 
 * @property int $Id_EtinIdiom
 * @property int $corden
 * @property int $ccodtab
 * @property int $ctipredg
 * @property int $ccodigo
 * @property string $cdescri
 *
 * @package App\Models
 */
class TnEtniaIdioma extends Model
{
	protected $table = 'tn_EtniaIdioma';
	protected $primaryKey = 'Id_EtinIdiom';
	public $timestamps = false;

	protected $casts = [
		'corden' => 'int',
		'ccodtab' => 'int',
		'ctipredg' => 'int',
		'ccodigo' => 'int'
	];

	protected $fillable = [
		'corden',
		'ccodtab',
		'ctipredg',
		'ccodigo',
		'cdescri'
	];
}
