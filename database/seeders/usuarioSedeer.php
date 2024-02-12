<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class usuarioSedeer extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $usuario = [
            'name' => 'Cuervo Lunar',
            'email' => 'cuervolunar@gmail.com',
            'password' => bcrypt('admin'),
        ];
        User::create($usuario);
    }
}
