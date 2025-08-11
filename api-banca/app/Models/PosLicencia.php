<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PosLicencia
 * 
 * @property int $id
 * @property string|null $uniqueId
 * @property string|null $manufacturer
 * @property string|null $model
 * @property string|null $modelName
 * @property string|null $deviceType
 * @property bool|null $state
 *
 * @package App\Models
 */
class PosLicencia extends Model
{
	protected $table = 'pos_licencias';
	public $timestamps = false;

	protected $casts = [
		'state' => 'bool'
	];

	protected $fillable = [
		'uniqueId',
		'manufacturer',
		'model',
		'modelName',
		'deviceType',
		'state'
	];
}
