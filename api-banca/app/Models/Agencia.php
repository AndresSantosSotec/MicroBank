<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Agencia extends Model
{
    protected $connection = 'banana';
    protected $table = 'tb_agencias';
    protected $primaryKey = 'id_agencia';
    public $timestamps = false;
    protected $fillable = [
        'nom_agencia',
        'cod_agenc',
        'id_nomenclatura_caja',
        'id_institucion',
        'municipio',
        'departamento',
        'pais',
        'id_nomenclatura_juridico',
    ];
}
