<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TbCobrosmanejocredito
 * 
 * @property int $id_CobrosManejoCredito
 * @property string $CobrosManejoCredito
 *
 * @package App\Models
 */
class TbCobrosmanejocredito extends Model
{
	protected $table = 'tb_cobrosmanejocredito';
	protected $primaryKey = 'id_CobrosManejoCredito';
	public $timestamps = false;

	protected $fillable = [
		'CobrosManejoCredito'
	];
}
