<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\TbCliente;
use App\Models\Garantiascliente;
use App\Models\Ahomctum;
use App\Models\Ahommov;
use App\Models\Aprctum;
use App\Models\Aprmov;
use App\Models\CremcreMetum;
use App\Models\CREDKAR;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /**
     * Authenticate a user using their username and password.
     */
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'name' => ['required', 'string'],
            'password' => ['required'],
        ]);

        /** @var User|null $user */
        $user = User::where('name', $credentials['name'])->first();

        if (! $user || ! Hash::check($credentials['password'], $user->password)) {
            return response()->json([
                'status' => 'error',
                'message' => 'Credenciales inválidas',
            ], 401);
        }

        $token = $user->createToken('mobile-app')->plainTextToken;

        $clientCode = $user->email;

        $cliente = TbCliente::where('idcod_cliente', $clientCode)->first();
        $garantias = Garantiascliente::where('Codigocli', $clientCode)->get();

        $ahorros = Ahomctum::where('ccodcli', $clientCode)
            ->get()
            ->map(function ($cuenta) {
                $movs = Ahommov::where('ccodaho', $cuenta->ccodaho)
                    ->orderByDesc('dfecope')
                    ->get();

                return [
                    'ccodaho' => $cuenta->ccodaho,
                    'monobj' => $cuenta->monobj,
                    'movimientos' => $movs,
                ];
            });

        $aportes = Aprctum::where('ccodcli', $clientCode)
            ->get()
            ->map(function ($cuenta) {
                $movs = Aprmov::where('ccodaport', $cuenta->ccodaport)
                    ->orderByDesc('dfecope')
                    ->get();

                return [
                    'ccodaport' => $cuenta->ccodaport,
                    'tasa' => $cuenta->tasa,
                    'movimientos' => $movs,
                ];
            });

        $creditos = CremcreMetum::where('CodCli', $clientCode)
            ->get()
            ->map(function ($cred) {
                $movs = CREDKAR::where('CCODCTA', $cred->CCODCTA)
                    ->orderByDesc('DFECPRO')
                    ->get();

                return [
                    'ccodcta' => $cred->CCODCTA,
                    'monto_aprobado' => $cred->NDesApr,
                    'movimientos' => $movs,
                ];
            });

        return response()->json([
            'status' => 'success',
            'token' => $token,
            'user' => [
                'id' => $user->id,
                'name' => $user->name,
                'email' => $user->email,
                'created_at' => $user->created_at,
            ],
            'cliente' => $cliente,
            'garantias' => $garantias,
            'cuentas' => [
                'ahorros' => $ahorros,
                'aportes' => $aportes,
                'creditos' => $creditos,
            ],
        ]);
    }
}
