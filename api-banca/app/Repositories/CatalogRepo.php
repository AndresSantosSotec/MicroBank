<?php

namespace App\Repositories;

use App\Models\Agencia;
use App\Models\SectorEconomico;

class CatalogRepo
{
    public function getAgencias(int $limit = 100)
    {
        return Agencia::query()->limit($limit)->get();
    }

    public function getSectoresEconomicos(int $limit = 100)
    {
        return SectorEconomico::query()->limit($limit)->get();
    }
}
