<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class LoginTest extends TestCase
{
    public function test_user_can_login_with_codigo_cliente(): void
    {
        User::factory()->create([
            'name' => 'u00206',
            'password' => Hash::make('contraseña123'),
        ]);

        $this->postJson('/api/login', [
            'codigo_cliente' => 'u00206',
            'password' => 'contraseña123',
        ])->assertStatus(200)
          ->assertJsonStructure([
              'status',
              'token',
              'user' => ['id', 'name', 'email', 'created_at'],
          ]);
    }

    public function test_login_fails_with_invalid_credentials(): void
    {
        User::factory()->create([
            'name' => 'u00206',
            'password' => Hash::make('secret'),
        ]);

        $this->postJson('/api/login', [
            'codigo_cliente' => 'u00206',
            'password' => 'wrong',
        ])->assertStatus(401)
          ->assertJson([
              'status' => 'error',
              'message' => 'Credenciales inválidas',
          ]);
    }
}
