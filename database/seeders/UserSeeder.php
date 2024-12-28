<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    
    public function run(): void
    {
        User::Create([
            'name' => 'administrador',
            'email' => 'administrador@gmail.com',
            'address' => 'Av, siempre viva',
            'password' => Hash::make("123456789"),
        ]);

        User::Create([
            'name' => 'creador3d',
            'email' => 'cliente@gmail.com',
            'address' => 'Av, siempre viva',
            'password' => Hash::make("123456789"),
        ]);

        User::Create([
            'name' => 'usuario3d',
            'email' => 'usuario3d@gmail.com',
            'address' => 'Av, siempre viva',
            'password' => Hash::make("123456789"),
        ]);
        User::factory(30)->create();
    }
}

