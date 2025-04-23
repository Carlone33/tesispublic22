<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Persona;
use App\Models\Funcionario;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create persona
        $persona = Persona::create([
            'primer_nombre' => 'Carlos',
            'primer_apellido' => 'Admin',
            'nacionalidad' => 'V',
            'cedula' => '00000000',
            'sexo' => 'M',
            'correo' => 'cmph1507@gmail.com',
        ]);

        // Create funcionario
        $funcionario = Funcionario::create([
            'persona_id' => $persona->id,
            'credencial' => '00000',
        ]);

        // Create user
        User::create([
            'funcionario_id' => $funcionario->id,
            'password' => bcrypt('carlos33'),
            'habilitado' => true
        ])->syncRoles(['Administrador', 'Permisologo', 'Transcriptor']);
    }
}
