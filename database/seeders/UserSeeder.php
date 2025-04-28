<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Persona;
use App\Models\Funcionario;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $usuarios = [
            [
                'persona' => [
                    'primer_nombre' => 'Carlos',
                    'primer_apellido' => 'Admin',
                    'nacionalidad' => 'V',
                    'cedula' => '00000001',
                    'sexo' => 'M',
                    'correo' => 'admin@example.com',
                ],
                'funcionario' => ['credencial' => 'admin01'],
                'password' => '00000',
                'rol' => 'Administrador',
            ],
            [
                'persona' => [
                    'primer_nombre' => 'Paula',
                    'primer_apellido' => 'Permisologa',
                    'nacionalidad' => 'V',
                    'cedula' => '00000002',
                    'sexo' => 'F',
                    'correo' => 'permisologo@example.com',
                ],
                'funcionario' => ['credencial' => 'permi01'],
                'password' => '00000',
                'rol' => 'Permisologo',
            ],
            [
                'persona' => [
                    'primer_nombre' => 'Tomas',
                    'primer_apellido' => 'Transcriptor',
                    'nacionalidad' => 'V',
                    'cedula' => '00000003',
                    'sexo' => 'M',
                    'correo' => 'transcriptor@example.com',
                ],
                'funcionario' => ['credencial' => 'trans01'],
                'password' => '00000',
                'rol' => 'Transcriptor',
            ],
            [
                'persona' => [
                    'primer_nombre' => 'Pedro',
                    'primer_apellido' => 'Lucha Libre',
                    'nacionalidad' => 'V',
                    'cedula' => '00000004',
                    'sexo' => 'M',
                    'correo' => 'superadmin@example.com',
                ],
                'funcionario' => ['credencial' => '00000'],
                'password' => 'carlos33',
                'rol' => 'Superadministrador',
            ],
        ];

        foreach ($usuarios as $u) {
            $persona = Persona::create($u['persona']);
            $funcionario = Funcionario::create([
                'persona_id' => $persona->id,
                'credencial' => $u['funcionario']['credencial'],
            ]);
            User::create([
                'funcionario_id' => $funcionario->id,
                'password' => bcrypt($u['password']),
                'habilitado' => true
            ])->syncRoles([$u['rol']]);
        }
    }
}
