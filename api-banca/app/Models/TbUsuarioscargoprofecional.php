<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TbUsuarioscargoprofecional
 * 
 * @property string $id_UsuariosCargoProfecional
 * @property string $UsuariosCargoProfecional
 *
 * @package App\Models
 */
class TbUsuarioscargoprofecional extends Model
{
	protected $table = 'tb_usuarioscargoprofecional';
	protected $primaryKey = 'id_UsuariosCargoProfecional';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'UsuariosCargoProfecional'
	];
}
