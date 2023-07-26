<?php

namespace Database\Seeders;

use App\Models\UserType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UserType::create([
            'type' => 'Super Usuário'
        ]);

        UserType::create([
            'type' => 'Administrativo'
        ]);

        UserType::create([
            'type' => 'Advogado'
        ]);
    }
}
