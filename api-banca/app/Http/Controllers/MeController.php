<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TbCliente;

class MeController extends Controller
{
    public function __invoke(Request $request)
    {
        $user = $request->user();

        // Código de cliente almacenado en users.email (aseguramos string para no perder ceros)
        $clientCode = (string) $user->email;

        // Traer TODO el registro del cliente desde la conexión 'banana'
        // Usamos find con primaryKey = idcod_cliente (según tu modelo)
        $cliente = TbCliente::query()->find($clientCode);

        // Si no existe cliente, devolvemos user y profile=null sin romper
        if (!$cliente) {
            return response()->json([
                'status' => 'success',
                'user' => [
                    'id'          => $user->id,
                    'username'    => $user->name,
                    'client_code' => $clientCode,
                ],
                'profile'      => null,
                'profile_raw'  => null,
            ]);
        }

        // --------- Helpers de formato ---------
        $fullName = $cliente->compl_name ?: trim(implode(' ', array_filter([
            $cliente->primer_name,
            $cliente->segundo_name,
            $cliente->tercer_name,
            $cliente->primer_last,
            $cliente->segundo_last,
            $cliente->casada_last,
        ])));

        $phones = array_values(array_filter([
            $cliente->tel_no1,
            $cliente->tel_no2,
        ]));

        $birthdate = optional($cliente->date_birth)->toDateString();

        // --------- Bloque normalizado/amigable para la app ---------
        $profile = [
            'client_code'   => $cliente->idcod_cliente,
            'full_name'     => $fullName,
            'short_name'    => $cliente->short_name,
            'avatar_url'    => $cliente->url_img,
            'birthdate'     => $birthdate,
            'gender'        => $cliente->genero,
            'civil_status'  => $cliente->estado_civil,

            'origin'        => [
                'origen'       => $cliente->origen,
                'pais_nacio'   => $cliente->pais_nacio,
                'depa_nacio'   => $cliente->depa_nacio,
                'muni_nacio'   => $cliente->muni_nacio,
                'aldea_nacio'  => $cliente->aldea,
                'nacionalidad' => $cliente->nacionalidad,
                'otra_nacion'  => $cliente->otra_nacion,
            ],

            'identification' => [
                'type_doc'      => $cliente->type_doc,
                'no_identifica' => $cliente->no_identifica,   // 👈 lo pediste explícito
                'pais_extiende' => $cliente->pais_extiende,
                'depa_extiende' => $cliente->depa_extiende,
                'muni_extiende' => $cliente->muni_extiende,
                'no_tributaria' => $cliente->no_tributaria,
                'no_igss'       => $cliente->no_igss,
                'tribal_id'     => $cliente->identi_tribu,
            ],

            'contact'       => [
                'email'  => $cliente->email,
                'phones' => $phones,
            ],

            'address' => [
                'line1'   => $cliente->Direccion,
                'dept'    => $cliente->depa_reside,
                'muni'    => $cliente->muni_reside,
                'aldea'   => $cliente->aldea_reside,
                'zona'    => $cliente->zona,
                'barrio'  => $cliente->barrio,
            ],

            'branch'          => $cliente->agencia,
            'household'       => [
                'area'            => $cliente->area,
                'years_residing'  => $cliente->ano_reside,
                'housing_status'  => $cliente->vivienda_Condi,
            ],

            'civil_partner'   => [
                'name' => $cliente->Conyuge,
                'tel'  => $cliente->telconyuge,
            ],

            'socioeconomics'  => [
                'income'       => $cliente->monto_ingre,
                'own_activity' => $cliente->actu_Propio, // sí/no
                'profession'   => $cliente->profesion,
            ],

            'education'       => [
                'education_level' => $cliente->educa,
                'can_read'        => $cliente->leer,
                'can_write'       => $cliente->escribir,
                'languages'       => $cliente->idioma,
            ],

            'relations'       => [
                'relac_propo' => $cliente->relac_propo,
                'Rel_insti'   => $cliente->Rel_insti,
            ],

            'references'      => [
                ['name' => $cliente->Nomb_Ref1, 'tel' => $cliente->Tel_Ref1],
                ['name' => $cliente->Nomb_Ref2, 'tel' => $cliente->Tel_Ref2],
                ['name' => $cliente->Nomb_Ref3, 'tel' => $cliente->Tel_Ref3],
            ],

            'pep_cpe'         => [
                'PEP' => $cliente->PEP,
                'CPE' => $cliente->CPE,
            ],

            'group'           => [
                'cargo_grupo' => $cliente->cargo_grupo,
            ],

            'admin'           => [
                'estado'            => $cliente->estado,
                'control_interno'   => $cliente->control_interno,
                'representante'     => [
                    'name'   => $cliente->representante_name,
                    'calidad'=> $cliente->repre_calidad,
                ],
                'religion_id'       => $cliente->id_religion,
                'datos_adicionales' => $cliente->datos_Adicionales,
                'observaciones'     => $cliente->observaciones,
            ],

            'dependents'      => [
                'hijos'        => $cliente->hijos,
                'dependencia'  => $cliente->dependencia,
                'parentesco1'  => $cliente->parentesco1,
                'parentesco2'  => $cliente->parentesco2,
                'parentesco3'  => $cliente->parentesco3,
                'fiador'       => $cliente->fiador,
            ],

            'audit'           => [
                'created_by' => $cliente->created_by,
                'updated_by' => $cliente->updated_by,
                'deleted_by' => $cliente->deleted_by,
                'fecha_alta' => optional($cliente->fecha_alta)->toDateString(),
                'fecha_baja' => optional($cliente->fecha_baja)->toDateString(),
                'fecha_mod'  => optional($cliente->fecha_mod)->toDateTimeString(),
                'id_tb_cli_balance' => $cliente->id_tb_cli_balance,
            ],
        ];

        // Respuesta combinada:
        return response()->json([
            'status' => 'success',
            'user' => [
                'id'          => $user->id,
                'username'    => $user->name,
                'client_code' => $clientCode,
            ],
            'profile'     => $profile,                // Normalizado/amigable
            'profile_raw' => $cliente->toArray(),     // TODO el registro de tb_cliente
        ]);
    }
}
