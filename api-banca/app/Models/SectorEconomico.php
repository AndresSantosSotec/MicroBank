<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SectorEconomico extends Model
{
    protected $connection = 'general';
    protected $table = 'tb_sectoreseconomicos';
    protected $primaryKey = 'id_SectoresEconomicos';
    public $incrementing = false;
    public $timestamps = false;
    protected $fillable = [
        'SectoresEconomicos',
    ];
}
