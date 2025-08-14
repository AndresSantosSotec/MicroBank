<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ActividadEconomica extends Model
{
    protected $connection = 'general';
    protected $table = 'tb_ActiEcono';
    protected $primaryKey = 'id_ActiEcono';
    public $timestamps = false;
}

