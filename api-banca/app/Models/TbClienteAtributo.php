<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TbClienteAtributo
 * 
 * @property int $id
 * @property string $id_cliente
 * @property int $id_atributo
 * @property string|null $valor
 *
 * @package App\Models
 */
class TbClienteAtributo extends Model
{
	protected $table = 'tb_cliente_atributo';
	public $timestamps = false;

	protected $casts = [
		'id_atributo' => 'int'
	];

	protected $fillable = [
		'id_cliente',
		'id_atributo',
		'valor'
	];
}
