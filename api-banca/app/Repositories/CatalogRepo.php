<?php

namespace App\Repositories;

use App\Models\Agencia;
use App\Models\SectorEconomico;
use App\Models\ActividadEconomica;

class CatalogRepo
{
    public function getAgencias(int $limit = 100, ?string $q = null)
    {
        return Agencia::query()
            ->select(['id_agencia', 'nom_agencia', 'cod_agenc'])
            ->when($q, fn($query) => $query->where('nom_agencia', 'like', "%$q%"))
            ->orderBy('nom_agencia')
            ->limit($limit)
            ->get();
    }

    public function getSectoresEconomicos(int $limit = 100)
    {
        return SectorEconomico::query()
            ->select(['id_SectoresEconomicos as id', 'SectoresEconomicos as nombre'])
            ->orderBy('SectoresEconomicos')
            ->limit($limit)
            ->get();
    }

    public function getActividadesEconomicas(string $sectorId, int $limit = 100, ?string $q = null)
    {
        return ActividadEconomica::query()
            ->select(['id_ActiEcono as id', 'Id_SctrEcono as sector_id', 'Titulo as nombre'])
            ->where('Id_SctrEcono', $sectorId)
            ->when($q, fn($query) => $query->where('Titulo', 'like', "%$q%"))
            ->orderBy('Titulo')
            ->limit($limit)
            ->get();
    }
}
