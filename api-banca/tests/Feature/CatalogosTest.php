<?php

namespace Tests\Feature;

use App\Repositories\CatalogRepo;
use Mockery;
use Tests\TestCase;

class CatalogosTest extends TestCase
{
    public function test_agencias_endpoint_returns_ok(): void
    {
        $repo = Mockery::mock(CatalogRepo::class);
        $repo->shouldReceive('getAgencias')->once()->andReturn(collect());
        $this->app->instance(CatalogRepo::class, $repo);

        $this->getJson('/api/agencias?limit=1')->assertStatus(200);
    }

    public function test_sectores_endpoint_returns_ok(): void
    {
        $repo = Mockery::mock(CatalogRepo::class);
        $repo->shouldReceive('getSectoresEconomicos')->once()->andReturn(collect());
        $this->app->instance(CatalogRepo::class, $repo);

        $this->getJson('/api/economia/sectores?limit=1')->assertStatus(200);
    }

    public function test_actividades_endpoint_returns_ok(): void
    {
        $repo = Mockery::mock(CatalogRepo::class);
        $repo->shouldReceive('getActividadesEconomicas')->once()->andReturn(collect());
        $this->app->instance(CatalogRepo::class, $repo);

        $this->getJson('/api/economia/sectores/S1/actividades?limit=1')->assertStatus(200);
    }
}
